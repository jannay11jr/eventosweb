# EVENT-TICKET #

Una página web de eventos con todas las funciones

## Descripción ##
EVENT-TICKET es una página web de eventos creada con Laravel. Permite a los usuarios administradores crear, editar y eliminar eventos, así como crear artistas y asignarlos a los eventos. También permite a los usuarios registrados comprar entradas para los eventos a través de Stripe.

## Características ##
Gestión de eventos: El usuario administrador puede crear, editar y eliminar eventos. Los eventos pueden incluir información como el título, la fecha, la hora, la ubicación, el precio y los artistas que actúan (se hará desde la página de artistas vinculandolos a los eventos en los que actuan).

Gestión de artistas: El usuario administrador puede crear, editar y eliminar artistas. Los artistas pueden incluir información como el nombre, la imagen, el género musical y el enlace a su página de Spotify.

Compra de entradas: Los usuarios registrados pueden comprar entradas para los eventos a través de Stripe (Lo he utilizado en modo prueba, aquí las tarjetas para simular los pagos: https://stripe.com/docs/testing?locale=es-ES ).

Formulario de contacto: Los usuarios pueden rellenar un formulario de contacto para cualquier tipo de duda o sugerencia (He utilizado Mailtrap para simular el envío).

Filtro de búsqueda: Los usuarios pueden utilizar un filtro de búsqueda para encontrar eventos específicos.

## Instalación ##
Para instalar EVENT-TICKET, necesitarás instalar lo siguiente:

- Composer
- Laravel
- Un servidor local como WAMP o XAMPP

## Otros detalles ##
El proyecto se encuentra en la rama **"prueba"**.
En el proyecto he utilizado seeders, la cuenta de administrador con el email: *jannay@gmail.com* y la contraseña *12345678.a*, el usuario normal *juan@gmail.com* con la contraseña *kijuhnjy.1a*
