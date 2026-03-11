<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="Cache-Control" content="no-store">
<meta name="description" content="CRUD básico: acceso a Base de Datos-PHP/SQL">
<meta name="author" content="Juan Valentín Marcos Argandoña">
<link rel="shortcut icon" href="../imagenes/icon.png" />
<title>Listado de viajes</title>
<link href="ficheros/estilo_menu.css" rel="stylesheet">
<link href="ficheros/all.css" rel="stylesheet">
<link href="ficheros/formularios.css" rel="stylesheet">
<link href="ficheros/tablas.css" rel="stylesheet">
</head>
<script>
function borroRegistro(celda){
    document.getElementById('estrella').style.visibility = 'visible';
    let la_td = celda.parentNode; 
    let img_info = la_td.childNodes[0];
    let el_codigo_de_la_img = img_info.getAttribute("data-codigo");
    celda.closest("tr").remove();
	let iframe = document.getElementById('pongotabla');
    let nelementos = iframe.contentDocument.getElementById('nelementos');
    if (nelementos) {
        let actual = parseInt(nelementos.textContent);
        nelementos.textContent = actual - 1;
    }
    window.frames['mensaje'].location.replace("PHP-Baja_Usuario.php?codigo=" + el_codigo_de_la_img);
}
</script>
<body onload="inicio();">
	<header>
		<div class="BarraNavegar">
			<div id="cabecera">
				<img id="logo" onclick="window.open('../index.html','_parent');" src="../imagenes/logo.png">
			</div>
			<div class="Opcion_menu_icono">
				<i class="fas fa-bars fa-lg"></i>
			</div>
			<nav class="Grupo_opciones">
				<label id="inicio" class="label" onclick="window.open('../index.html','_parent');">Inicio</label>
				<label id="reserva" class="label" onclick="window.open('../alta/alta.html','_parent');">Reserva</label>
				<label id="listado" class="label">Listado de viajes</label>
			</nav>
		</div>
	</header>
	<div id="contenedor" class="contenedor">
		<div id="cajapagina" class="contenedor2">
			<div class="contenedor4">
				<h1 id="titulo">LISTADO DE VIAJES</h1>
				<div id="elselect">
					<div id="izquierda">
						<label id="c1">Ordenar:</label>
						<select id="criterio1" name="criterio1" onchange="listado_usuarios()">
							<option value="DNI">DNI</option>
							<option value="NOMBRE" selected="selected">NOMBRE</option>
							<option value="ORIGEN">ORIGEN</option>
							<option value="DESTINO">DESTINO</option>
							<option value="CLASE_VUELO">CLASE</option>
							<option value="FECHA">FECHA</option>
							<option value="ESTANCIA">ESTANCIA</option>
						</select>
					</div>
					<div id="buscador">
						<input id="dni" onchange="listado_usuarios()" name="dni" type="text" pattern="[0-9]{8}[A-Za-z]{1}"
							title="El DNI no existe" minlength="9" maxlength="9"
							placeholder="Buscar por DNI">
						<i onclick="listado_usuarios()" class="fas fa-search lupa"></i>
					</div>
					<div id="derecha">
						<label id="c2">Clase:</label>
						<select id="criterio2" name="criterio2" onchange="listado_usuarios()">
							<option value="novalue" selected>Sin filtrar</option>
							<option value="primera">Primera</option>
							<option value="business">Business</option>
							<option value="premium">Económica Premium</option>
							<option value="economica">Económica</option>
						</select>
					</div>
				</div>
				
				<iframe id="pongotabla" name="pongotabla" align="center" allow="fullscreen">
				</iframe>
				<iframe id="mensaje" name="mensaje" style="display:none;"></iframe>
			</div>
		</div>
	</div>
	<footer>
		<div class="BarraNavegar2">
			<div id="cabecera2">
				<img id="estrella" src="imagenes/estrella.gif" />
				<img id="logo2" src="../imagenes/logo.png">
			</div>
		</div>
	</footer>
</body>
</html>
<script>
	var alto_iframe = 0;
	function ancho_y_alto_pantalla() {
		var alto_pantalla = window.innerHeight || document.documentElement.clientHeight;
		return alto_pantalla;
	}
	function ajustar_iframe() {
		alto_iframe = ((ancho_y_alto_pantalla()) - 300);
		var iframe = document.getElementById('pongotabla');
		if (iframe) {
			iframe.height = alto_iframe;
		}
	}
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', ajustar_iframe);
	} else {
		ajustar_iframe();
	}
	window.addEventListener('resize', ajustar_iframe);
	function pasofoco(objeto) {
		document.getElementById(objeto).focus();
		document.getElementById(objeto).select();
	}
	function borro_iFrame() {
		mensaje.document.open();
		mensaje.document.close();
	}
	function listado_usuarios() {
		let elcriterio = document.getElementById('criterio1').value;
		let laclase = document.getElementById('criterio2').value;
		let eldni = document.getElementById('dni').value;
		borro_iFrame();
		document.getElementById('estrella').style.visibility = 'visible';
		document.getElementById('pongotabla').src = 'PHP-Listado_Usuarios.php?elorden=' + elcriterio + '&laclase=' + laclase + '&eldni=' + eldni;
	}
	function borro_iFrame() {
		var iframe_element = window.frames['pongotabla'];
		iframe_element.document.open();
		iframe_element.document.close();
	}
	function oculto_estrella() {
		document.getElementById('estrella').style.visibility = 'hidden';
	}
	function inicio() {
		document.getElementById('criterio1').focus();
		listado_usuarios(document.getElementById('criterio1').value);
	}
	function visualizo_menu() {
		var opciones_menu = document.querySelectorAll('.Grupo_opciones');
		opciones_menu.forEach(nav => {
			nav.classList.toggle('Navbar_ToggleShow');
		});
	}
	document.querySelector('.Opcion_menu_icono').addEventListener('click', visualizo_menu);
</script>