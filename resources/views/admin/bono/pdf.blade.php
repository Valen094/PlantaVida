

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

 
    span.cls_004{font-family: 'Ubuntu', sans-serif; color: black; font-size:14px;font-weight:400;font-style:normal;text-decoration: none}
    div.cls_004{font-family: 'Ubuntu', sans-serif;  font-size:14px; color: black;;font-weight:400;font-style:normal;text-decoration: none}

.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
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
    top: 535px; 
    width: 75%;
    text-align: justify;
}

#lanzamiento{
    position:absolute;
    left: 100px;
    top: 336px; 
    width: 75%;
    text-align: justify;
}



</style>
<script type="text/javascript" src="eef52cdc-254f-11ec-a980-0cc47a792c0a_id_eef52cdc-254f-11ec-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>




<div class="contenedor" >

@if($solicitud->motivo == 'lanzamiento')
<img  src="{{ asset('/img/bono_lanzamiento.png')}}" width=790 height=1015>
@endif
<img  src="{{ asset('/img/bono.png')}}" width=790 height=1015>

@if($solicitud->motivo == 'Condolencias')
<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">
    <b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b>, {{$solicitud->manifestacion}} el sensible fallecimiento {{$solicitud->trato}} <b>{{$solicitud->quien}}</b> quien ha dejado una huella indeleble entre sus familiares y amigos.<br><br>

    Como muestra de solidaridad, en memoria {{$solicitud->trato}} <b>{{$solicitud->quien}}</b>, se hace entrega a <b>{{$solicitud->dirigido}}</b> de este BONO, testimonio de la siembra de un árbol, como símbolo de vida y recuerdo perenne entre nosotros. <br><br>

    Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
    Código de identificación: <b>{{$solicitud->id}}</b> <br>
    Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
    Consultas: <b>www.plantavida.camaraarmenia.org.co</b>

    </span>
</div>

@elseif($solicitud->motivo == 'Nacimiento')

<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">

    <b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b> {{$solicitud->manifestacion}} a <b>{{$solicitud->dirigido}}</b> por la nueva vida que ha llegado a su hogar para iluminarlo de alegría, anhelos y felicidad.  <br><br>  

    Como expresión para celebrar este acontecimiento tan especial, se entrega este BONO, testimonio de la siembra de un árbol, que crecerá como símbolo de vida y de un futuro próspero y feliz.<br><br>
    
    Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
    Código de identificación: <b>{{$solicitud->id}}</b> <br>
    Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
    Consultas: <b>www.plantavida.camaraarmenia.org.co</b>

    </span>
    </div>


@elseif($solicitud->motivo == 'Boda')

<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">
        <b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b> {{$solicitud->manifestacion}} a <b>{{$solicitud->dirigido}}</b> con motivo de su boda; que la armonía, el amor, la paz y la felicidad sean siempre los pilares de esta unión.<br><br>

        Como manifestación de alegría por este acontecimiento tan especial, se hace entrega de un BONO, testimonio de la siembra de un árbol, augurando un presente y un futuro próspero y feliz.<br><br>

        Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
        Código de identificación: <b>{{$solicitud->id}}</b> <br>
        Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
        Consultas: <b>www.plantavida.camaraarmenia.org.co</b>
    </span>
</div>

@elseif($solicitud->motivo == 'Cumpleaños')

<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">

   


    <b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b> {{$solicitud->manifestacion}} en este día tan especial a <b>{{$solicitud->dirigido}}</b> 
    en su cumpleaños, deseándole siempre salud, felicidad y amor. <br><br>

    Como expresión de afecto, se entrega este BONO, testimonio de la siembra de un árbol, 
    como símbolo de vida y de momentos únicos e inolvidables. <br><br>

    Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
    Código de identificación: <b>{{$solicitud->id}}</b> <br>
    Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
    Consultas: <b>www.plantavida.camaraarmenia.org.co</b>
</span>
</div>

@elseif($solicitud->motivo == 'Grado')

<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">

        <b>{{$solicitud->razon_social}} {{$solicitud->nombre_apellido}}</b> {{$solicitud->manifestacion}} a <b>{{$solicitud->dirigido}}</b>  por el logro alcanzado, 
        fruto del esfuerzo y la dedicación; que la meta que hoy se cumple, sea el principio de un camino colmado 
        de satisfacciones y grandiosas experiencias. <br><br>  

        Como expresión para celebrar este acontecimiento tan especial, se entrega este BONO, 
        testimonio de la siembra de un árbol, símbolo de un futuro exitoso y feliz. <br><br>

        Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
        Código de identificación: <b>{{$solicitud->id}}</b> <br>
        Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
        Consultas: <b>www.plantavida.camaraarmenia.org.co</b>
    </span>
</div>

@elseif($solicitud->motivo == 'lanzamiento')

<div  id="lanzamiento" class="cls_004">
    
    <span class="cls_004">

    <div style="text-align: center;">
        <b style="font-size: 35px;">{{$solicitud->arbol->titulo}}</b> <br><br> <b style="font-size: 20px;"> <i>{{$solicitud->arbol->autor}}</i> {{$solicitud->arbol->nombre_cientifico}}</b>  <br><br>
        <b>Ecología: {{$solicitud->arbol->ecologia}}</b>
    </div>
         <br><br><br>
 
      
        Código de identificación: <b>{{$solicitud->id}}</b> <br>
        Ubicación: &nbsp; <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
        Consultas: &nbsp; <b>www.plantavida.camaraarmenia.org.co</b>
    </span>
</div>



@elseif($solicitud->motivo == 'Bono memoria')
<div  id="texto_1" class="cls_004">
    
    <span class="cls_004">

        Hoy se conmemora la existencia de un ser que ha dejado un bello recuerdo en nuestras vidas. 
        Así, en nombre de <b>{{$solicitud->quien}}</b> se siembra un árbol como símbolo de vida y recuerdo perenne entre nosotros.
    <br><br>

    Árbol: <b>{{$solicitud->arbol->titulo}}</b> <br>
    Código de identificación: <b>{{$solicitud->id}}</b> <br>
    Ubicación: <b>Parque de los Sueños en inmediaciones de los Barrios Corbones y Libertadores en Armenia, Quindío.</b><br>
    Consultas: <b>www.plantavida.camaraarmenia.org.co</b>

    </span>
</div>


@else

<div id="texto_1" class="cls_004">
    
<span class="cls_004">

{{$solicitud->motivo}}

</span>
</div>

@endif

</div>

</body>
</html>
