<?php

$servidor="localhost";
$usuario="examen";
$contrasena="[BdI1/ZHM]X5vySq";
$db="examen";



if($_POST['nombres']!=""){
    $nombre=$_POST["nombres"];
    $nombre=strtoupper($nombre);
}

if($_POST['primer_apellido']!=""){
    $apellido1=$_POST["primer_apellido"];
    $apellido1=strtoupper($apellido1);
}

if($_POST['segundo_apellido']!=""){
    $apellido2=$_POST["segundo_apellido"];
    $apellido2=strtoupper($apellido2);
}

if(isset($_POST['genero'])){
    $genero=$_POST["genero"];

}

if($_POST['dia']){
    $dia=$_POST["dia"];

}

if($_POST['mes']){
    $mes=$_POST["mes"];

}

if($_POST['año']){
    $year=$_POST["año"];

}

if($_POST['entidad']){
    $entidad=$_POST["entidad"];

}

if($_POST['correo_electronico']){
    $correo=$_POST["correo_electronico"];

}

$var=false;
$i = 1;
$tamano = strlen($apellido1);
$consonante1 = "a";
$consonante2 = "a";
$consonante3 = "a";
do{
    if($apellido1[$i-1]==' ' || $i == $tamano){
        $consonante1 = '';
        $var=true;
        continue;
    }
    if($apellido1[$i] == "A" || $apellido1[$i] == "E" || $apellido1[$i]== "I" || $apellido1[$i]== "O" || $apellido1[$i]== "U" ){
        $i=$i + 1;
    }else{
        $var=true;
        $consonante1 = $apellido1[$i];
    }
}while($var==false);

$var=false;
$i = 1;
$tamano = strlen($apellido2);
do{
    if($apellido2[$i-1]==' ' || $i == $tamano){
        $consonante2 = '';
        $var=true;
        continue;
    }
    if($apellido2[$i]== 'A' || $apellido2[$i]== 'E' || $apellido2[$i]== 'I' || $apellido2[$i]== 'O' || $apellido2[$i]== 'U' ){
        $i++;
    }else{
        $var=true;
        $consonante2 = $apellido2[$i];
    }
    
}while($var==false);

$var=false;
$i = 1;
$tamano = strlen($nombre);
do{
      if($nombre[$i-1]==' ' || $i == $tamano){
        $consonante3 = '';
        $var=true;
        continue;
    }
    if($nombre[$i]== 'A' || $nombre[$i]== 'E' || $nombre[$i]== 'I' || $nombre[$i]== 'O' || $nombre[$i]== 'U' ){
        $i++;
    }else{
        $var=true;
        $consonante3 = $nombre[$i];
    }
}while($var==false);

$var = rand(1, 9);

$CURP=$apellido1[0].$apellido1[1].$apellido2[0].$nombre[0].$year.$mes.$dia.$genero.$entidad.$consonante1.$consonante2.$consonante3."0".$var;

$enviar=mail("$correo","CURP","$nombre"." ,su busqueda de CURP ha sido completada correctamente en la base de datos del gobierno. La CURP encontrada es: ".$CURP);

//if($enviar)
//{
//    echo "Correo correctamente enviado";
//}else
//{
//    echo "El correo no se envió";
//}

////  Realizamos la concexion a la base de datos mediante php*/
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
if(!$conexion){
    echo "Error: No se puede conectar a la base de datos MySQL".PHP_EOL;
    echo "Errno: Errno de depuracion".mysqli_connect_errno().PHP_EOL;
    echo "Error: Error de depuracion".mysqli_connect_error().PHP_EOL;
    exit;
}
//echo "La conexion a la base de datos se ha realizado correctamente".PHP_EOL;


$query = "INSERT INTO registro (Nombres,PrimerApellido,SegundoApellido,Genero,DD,MM,AA,Entidad,Correo,CURP) VALUES ('$nombre','$apellido1','$apellido2','$genero','$dia','$mes','$year','$entidad','$correo','$CURP')";

mysqli_query($conexion,$query);
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="master2.css">
    <title>Busqueda</title>
</head>
<body>
   <div class="header">
		<div class="header-up">
			<img class="img-gobMex" src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" width="104" height="35" alt="Página de inicio, Gobierno de México">
			<span class="header-up-rigth">
				<p class="txt-normal txt-normal-header">Trámites</p>
				<p class="txt-normal txt-normal-header">Gobierno</p>
				<img class="img-search" src="Images/search_white_24dp.svg" alt="search">
			</span>
		</div>
		<div class="header-down">
			<p class="txt-normal">RENAPO</p>
		</div>
	</div>

	<main class="main">
		<section>
			<div class="indice">
				<img src="Images/home_black_24dp.svg" alt="casita" class="casita hover-underline">
				<img src="Images/chevron_right_black_24dp.svg" alt="flechita">
				<p class="txt-normal hover-underline">Inicio</p>
				<img src="Images/chevron_right_black_24dp.svg" alt="flechita">
				<p class="txt-normal bold hover-underline">Descarga tu CURP</p>
			</div>
            <h1 class="txt-normal titulo">Descarga tu CURP</h1>
        </section>
    </main>
    
    <div class="contenedor">
        <h2 class="texto"> <?php echo $nombre.", su curp es: "; ?> </h2>
        <div class="contenedor2">
            <h2 class="texto2"> <?php echo $CURP; ?> </h2>
        </div>
    </div>
    <div class="botones">
					<button class="submit1"> DESCARGAR </button>				
    </div>
    
    <footer class="pie-pagina">
		<div class="pie-pagina-1">
			<div class="pie-pagina-1-1">
				<img class="img-gobMex" src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" width="240" height="80" alt="Página de inicio, Gobierno de México">
			</div>
			<div class="pie-pagina-1-2">
				<b class="pie-b">Enlaces</b>
				<p class="pie-p" >Participa</p>
				<p class="pie-p" >Publicaciones Oficiales</p>
				<p class="pie-p" >Marco Jurídico</p>
				<p class="pie-p" >Plataforma Nacional de Transparencia</p>
			</div>
			<div class="pie-pagina-1-3">
				<b class="pie-b">¿Qué es gob.mx?</b>
				<p class="pie-p" >Es el portal único de trámites, información y participación ciudadana. Leer más</p>
				<p class="pie-p" >Portal de datos abiertos</p>
				<p class="pie-p" >Declaración de accesibilidad</p>
				<p class="pie-p" >Aviso de privacidad integral</p>
				<p class="pie-p" >Aviso de privacidad simplificado</p>
				<p class="pie-p" >Términos y Condiciones</p>
				<p class="pie-p" >Política de seguridad</p>
				<p class="pie-p" >Mapa de sitio</p>
			</div>
			<div class="pie-pagina-1-4">
				<b class="pie-b">Denuncia contra servidores públicos</b>
				<p class="pie-p" >Devs: <br> siguenos!<p>
					<div class="desarrolladores">
						<a href="https://www.instagram.com/_angel_romo_?r=nametag" class="dev">Angel</a>
						<a href="https://instagram.com/aranza_ruizt?utm_medium=copy_link" class="dev">Aranza</a>
						<a href="https://www.instagram.com/basher_mx?r=nametag" class="dev">Ulises</a>
					</div>
			</div>
		</div>
		<div class="pie-pagina-3">
			Derechos reservados | Examen 2º Parcial | UAA
		</div>

	</footer>

</body>
</html>