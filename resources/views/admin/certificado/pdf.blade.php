<!-- Certificado -->

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

 
    span.cls_004{font-family: 'Ubuntu', sans-serif; color: black; font-size:14px ;font-weight:400;font-style:normal;text-decoration: none}
    div.cls_004{font-family: 'Ubuntu', sans-serif;   color: black; font-size:14px; font-weight:400;font-style:normal;text-decoration: none}

.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
    top:0.00in;
    left:0.00in;
    width: 23cm;
    height: 17cm;

}


b {
    color: #0c0202;
}


#texto_1{
    position: absolute;
    left: 165px;
    top: 40%;
    width: 63%;
    text-align: center;
}

img{

    position: relative;
    display: inline-block;
    text-align: center;
    top:3.5cm;
    left:0.00in;
    width: 23cm;
    height: 17cm;
}

</style>
<script type="text/javascript" src="eef52cdc-254f-11ec-a980-0cc47a792c0a_id_eef52cdc-254f-11ec-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>




<div class="contenedor" >

<!-- <img  src="{{ asset('/img/certificado.png')}}" > -->

<?php setlocale(LC_CTYPE, 'de_DE.UTF8'); ?>
<div  id="texto_1" class="cls_004">
 <br><br>
<b style="font-size:17px;"> {{ $solicitud->nombre_apellido }}</b> <br><br>

Realizó la siembra de {{$solicitud->cantidad_arboles}} árbol (es) nativo (s), contribuyendo con el Programa Planta Vida, 
el cual busca la restauración y/o rehabilitación de áreas asociadas a fuentes hídricas
abastecedoras de acueductos del Departamento del Quindío.<br>
La siembra fue realizada en el Parque de los Sueños, ubicado en inmediaciones de los Barrios Corbones y Libertadores 
de la ciudad de Armenia (Quindío). <br><br>

<?php 

setlocale(LC_TIME, "spanish");
$mi_fecha = $solicitud->fecha_expedicion;
$mi_fecha = str_replace("/", "-", $mi_fecha);			
$mes = date("d-m-Y", strtotime($mi_fecha));		
$Dia = date("d", strtotime($mi_fecha));	

$Mes = strftime("%B", strtotime($mes));
$Anio = strftime("%Y", strtotime($mes));


?>

Certificado expedido a los {{$Dia}} días del mes de {{$Mes}} del año {{$Anio}} <br><br>

@if($solicitud->arbol != null)
Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
@endif

Código de identificación: <b>{{$solicitud->id}}</b> <br>
 
 
</div>


</div>

</body>
</html>
