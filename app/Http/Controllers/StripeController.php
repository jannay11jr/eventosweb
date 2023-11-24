<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Compra;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Evento;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class StripeController extends Controller
{


    public function getPDF(Request $request){

        $compras = $request->session()->get('compras', []);
        $pdf = PDF::loadView('entradas.pdf', compact('compras'));
        $compra = new Compra();
        $user = Usuario::findOrFail(auth()->user()->id);
        $compra->user()->associate($user);

        $total =0;
        foreach($compras as $c){
            $total+=$c['total'];
        }

        $compra->precio_total=$total;
        $compra->save();

        foreach($compras as $c){
            for($i=0; $i < $c['cantidad']; $i++ ){
                $entrada = new Entrada();
                $entrada->precio=$c['precioUnitario'];
                $entrada->compras()->associate($compra);
                $evento = Evento::findOrFail($c['eventoId']);
                $entrada ->eventos()->associate($evento);

                $entrada->save();
            }

        }
        return $pdf->stream('prueba.pdf');

    }

    public function createCheckoutSession(Request $request) {


        Stripe::setApiKey(config('services.stripe.secret'));
        $lineItems = [];
        $sinEntradas=true;
        foreach ($request->input('entradas') as $eventoId => $cantidad) {
            $evento = Evento::find($eventoId);


            if ($evento && $cantidad >=1) {
                $sinEntradas=false;
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
                    'eventoId' => $eventoId,
                    'evento' => $evento->nombre,
                    'cantidad' => $cantidad,
                    'precioUnitario'=>$evento->precio,
                    'total' => $evento->precio * $cantidad
                ];
            }




        }
        if($sinEntradas){
            return redirect()->route('comprar_entradas')->with('error','No has seleccionado ninguna entrada');
            session()->forget('error');
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

