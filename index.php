<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Base de dados</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-basea').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "conexaobasea.php",
					"type": "POST"
				}
			});
		} );
		</script>

        <script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-baseb').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
				"url": "conexaobaseb.php",
				"type": "POST"
				}
			});
		} );
		</script>

        <script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-basec').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
				"url": "conexaobasec.php",
				"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<style>
			thead{
                color: blue;
				font-weight: bold;
            }
			body{
				background-color: #B0E0E6;
			}
			</style>

		<h1 style="text-align:center">Dados de dividendos</h1>
		<table id="listar-basea" class="display" style="width:100%">
			<thead>
				<tr>
					<th>CPF</th>
					<th>Nome</th>
					<th>Endereco</th>
					<th>Lista de dividas</th>
				</tr>
			</thead>
		</table>	
		
		<table id="listar-baseb" class="display" style="width:100%">
			<thead>
				<tr>
					<th>idade</th>
					<th>Lista de bens</th>
					<th>Fonte de renda</th>
				</tr>
			</thead>
		</table>
		
		
		<table id="listar-basec" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Ultima consulta do CPF</th>
					<th>Movimentacao financeira no CPF</th>
					<th>ultima compra no cartao de credito CPF</th>
				</tr>
			</thead>
		</table>	

	</body>
</html>
