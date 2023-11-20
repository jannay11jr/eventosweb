<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Evento;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class StripeController extends Controller
{
    // public function downloadInvoice(Request $request, $invoiceId){
    //     return $request->user()->downloadInvoice($invoiceId, [
    //         'vendor' => 'Event-Ticket',
    //         'street' => 'Calle Pergamino nº5',
    //         'location' => 'Benidorm, Alicante',
    //         'phone' => '+34 699 00 00 00',
    //         'email' => 'event-ticket@events.com',
    //         'vendorVat' => 'BE123456789',
    //     ], 'entrada-event-ticket');

    // }

    public function getPDF(Request $request){

        $compras = $request->session()->get('compras', []);
        $pdf = PDF::loadView('entradas.pdf', compact('compras'));
        return $pdf->stream('prueba.pdf');

    }

    public function createCheckoutSession(Request $request) {


        Stripe::setApiKey(config('services.stripe.secret'));
        $lineItems = [];

        foreach ($request->input('entradas') as $eventoId => $cantidad) {
            $evento = Evento::find($eventoId);

            if ($evento && $cantidad >=1) {
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $evento->nombre,
                        ],
                         'unit_amount' => $evento->precio * 100,
                    ],
                    'quantity' => $cantidad,
                ];
                $compras[] = [
                    'evento' => $evento->nombre,
                    'cantidad' => $cantidad,
                    'total' => $evento->precio * $cantidad
                ];
            }
        }

        $request->session()->put('compras', $compras);

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => url('/generar-pdf'),
            'cancel_url' => url('/comprar_entradas'),

        ]);
        return redirect()->to($checkout_session->url);

    }
}

