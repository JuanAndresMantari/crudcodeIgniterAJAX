<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Usuarios</title>
</head>
<body style="background-image:url("../fondo.php"); " >
		<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #D3D3D3;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		background-image: url("../fondo.jpg");
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 40px;
		font-weight: normal;
		margin: 20 20 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	table {
	   width: 50%;
	   border: 1px solid #000;
	}
	th, td {
	   width: 20%;
	   vertical-align: top;
	   border: 1px solid #000;
	   border-collapse: collapse;
	   padding: 0.3em;
	   caption-side: bottom;
	}
	caption {
	   padding: 0.3em;
	   color: #fff;
	    background: #000;
	}
	th {
	   background: #eee;
	}

	</style>
	<center><h1><b><u>Usuarios</u></b></h1></center>
	<center>
	<div class="box">
            
    <div class="content">
			        
	    <h2>Ingresar nuevo Usuario</h2>
	    <div id="frm">
			<input type="hidden" id="id" />
			<input id="txtNombre" placeholder="Nombre" />
			<input id="txtApellido" placeholder="Apellido" />
			<button id="btn" value="ingresar">Ingresar</button>
		</div>

    </div>
            
       	<h2>Lista de usuarios</h2>
        <div class="content">
	        <table class="table"  >
				<thead>
					<tr>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody id="cuerpo">
				</tbody>
			</table>
        </div>
            
    </div>
    </center>
	<br>

	<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>