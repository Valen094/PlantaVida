
<html>
<head>
    

<meta http-equiv=Content-Type content="text/html; charset=UTF-8">

<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<style type="text/css">


@page {
    margin-left: 0.4cm;
    margin-right: 0.4cm;
    margin-top:0.5cm;
    margin-bottom: 0.5cm;
}

span.cls_004{font-family: 'Ubuntu', sans-serif; color: #564e4a; font-size:14px;color: #564e4a;font-weight:400;font-style:normal;text-decoration: none}
div.cls_004{font-family: 'Ubuntu', sans-serif;  font-size:14px; color: #564e4a;;font-weight:400;font-style:normal;text-decoration: none}


.contenedor{
    position: relative;
    display: inline-block;
   	/*border: solid;*/
    width: 788px;
    height: 1015px;
}

b {
    color: #0c0202;
}


#texto_1{
    position:absolute;
    left: 100px;
    top: 154px; 
    width: 75%;
    text-align: justify;
}

</style>

<script type="text/javascript" src="20d29fae-255b-11ec-a980-0cc47a792c0a_id_20d29fae-255b-11ec-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>

</head>
<body>

<?php

$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
$hoy =  date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

?>

<div class="contenedor" >

<!--<img src="{{ asset('/img/carta.jpg')}}" width=790 height=1015 > -->


<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">

    Armenia, {{$hoy}} <br><br>

<span class="cls_003">{{$solicitud->trato_donante}} <br>
<b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b> <br><br>


Cordial saludo <br><br>


@if($solicitud->motivo == 'Condolencias') <!-- Condolencias -->

La Cámara de Comercio de Armenia y del Quindío agradece su aporte a la preservación del medio ambiente a 
través de la adquisición del BONO PLANTA VIDA para la siembra de un árbol en memoria {{$solicitud->trato}} <b>{{$solicitud->quien}}</b>
y en solidaridad a su familia y amigos. <br><br>

El árbol sembrado se encuentra ubicado en un área de interés ambiental que además de contribuir a la conservación de las cuencas hidrográficas y de la fauna y flora nativas del departamento, ofrece espacios saludables de esparcimiento y recreación para la comunidad. <br><br>

Los árboles plantados proporcionan alimento para las aves y demás fauna local, así mismo serán generadores de oxígeno y harán parte de la conservación del paisaje característico de nuestra región. <br><br>

El Bono Planta Vida ha sido entregado a la familia {{$solicitud->trato}} <b>{{$solicitud->quien}}</b>, con la siguiente información: <br><br>

@elseif($solicitud->motivo == 'Nacimiento') <!-- Nacimiento-->

La Cámara de Comercio de Armenia y del Quindío agradece su aporte a la preservación del medio ambiente a través de la adquisición del BONO PLANTA VIDA para la siembra de un árbol felicitando a <b>{{$solicitud->dirigido}}</b> por el nacimiento de un nuevo ser. <br><br>

El árbol sembrado se encuentra ubicado en un área de interés ambiental que además de contribuir a la conservación de las cuencas hidrográficas y de la fauna y flora nativas del departamento, ofrece espacios saludables de esparcimiento y recreación para la comunidad. <br><br>

Los árboles plantados proporcionan alimento para las aves y demás fauna local, así mismo serán generadores de oxígeno y harán parte de la conservación del paisaje característico de nuestra región. <br><br>

El Bono Planta Vida ha sido entregado a <b>{{$solicitud->dirigido}}</b>, con la siguiente información: <br><br>


@elseif($solicitud->motivo == 'Boda') <!-- Boda-->

La Cámara de Comercio de Armenia y del Quindío agradece su aporte a la preservación del medio ambiente a través de la adquisición del BONO PLANTA VIDA para la siembra de un árbol en nombre de <b>{{$solicitud->dirigido}}</b> con motivo de su boda. <br><br>

El árbol sembrado se encuentra ubicado en un área de interés ambiental que además de contribuir a la conservación de las cuencas hidrográficas y de la fauna y flora nativas del departamento, ofrece espacios saludables de esparcimiento y recreación para la comunidad.  <br><br>

Los árboles plantados proporcionan alimento para las aves y demás fauna local, así mismo serán generadores de oxígeno y harán parte de la conservación del paisaje característico de nuestra región. <br><br>

El Bono Planta Vida ha sido entregado a los esposos <b>{{$solicitud->dirigido}}</b>, con la siguiente información: <br><br>


@elseif($solicitud->motivo == 'Cumpleaños') <!-- Cumpleaños-->

La Cámara de Comercio de Armenia y del Quindío agradece su aporte a la preservación del medio ambiente a través de la adquisición del BONO PLANTA VIDA para la siembra de un árbol homenajeando a <b>{{$solicitud->dirigido}}</b> en la celebración de su cumpleaños. <br><br>

El árbol sembrado se encuentra ubicado en un área de interés ambiental que además de contribuir a la conservación de las cuencas hidrográficas y de la fauna y flora nativas del departamento, ofrece espacios saludables de esparcimiento y recreación para la comunidad. <br><br>

Los árboles plantados proporcionan alimento para las aves y demás fauna local, así mismo serán generadores de oxígeno y harán parte de la conservación del paisaje característico de nuestra región. <br><br>

El Bono Planta Vida ha sido entregado a <b>{{$solicitud->dirigido}}</b>, con la siguiente información: <br><br>


@elseif($solicitud->motivo == 'Grado') <!-- Grado-->


La Cámara de Comercio de Armenia y del Quindío agradece su aporte a la preservación del medio ambiente a través de la adquisición del BONO PLANTA VIDA para la siembra de un árbol en nombre de <b>{{$solicitud->dirigido}}</b> por el logro alcanzado, fruto del esfuerzo y la dedicación. <br><br>

El árbol sembrado se encuentra ubicado en un área de interés ambiental que además de contribuir a la conservación de las cuencas hidrográficas y de la fauna y flora nativas del departamento, ofrece espacios saludables de esparcimiento y recreación para la comunidad. <br><br>

Los árboles plantados proporcionan alimento para las aves y demás fauna local, así mismo serán generadores de oxígeno y harán parte de la conservación del paisaje característico de nuestra región. <br><br>

El Bono Planta Vida ha sido entregado a <b>{{$solicitud->dirigido}}</b>, con la siguiente información: <br><br>


@else

BONO NO IDENTIFICADO

@endif



Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
Código de identificación: <b>{{$solicitud->id}}</b> <br>
Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
Consultas: <b>www.plantavida.camaraarmenia.org.co</b>


    </span>
</div>





</div>

</body>
</html>