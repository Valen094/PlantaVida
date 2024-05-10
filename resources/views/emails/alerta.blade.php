<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <h1>Bienvenido al programa planta vida </h1>

        <p>Gracias por adquirir los bonos Planta Vida y sumarte a esta iniciativa de conservación ambiental. 
        Para continuar con el proceso te invitamos a realizar el pago por las opciones que te ofrecemos a continuación. <br> <br>

        Transferencia: <br>
        Cuenta Davivienda <br>
        Ahorros No. 136269997062 <br><br>

        Cuenta Bancolombia <br>
        Corriente No. 06924196995 <br> <br>

        O en oficinas de la CCAQ (Armenia), piso dos. <br>

        En tus momentos más significativos… Planta Vida <br>
        </p>
        <br>

        Identificador:  {{ $datos->id}} <br>
        Nombre:  {{$datos->nombre_apellido}} <br>
        Identificacion: {{$datos->identificacion}} <br>
        Telefono: {{$datos->telefono}} <br>
        Correo: {{$datos->correo_electronico}} <br>
        Motivo:  {{$datos->motivo}} <br>
        Beneficiario(a):  {{  $datos->dirigido}}
    </body>
</html>