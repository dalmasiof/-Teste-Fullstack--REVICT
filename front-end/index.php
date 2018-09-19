<!DOCTYPE html>
<html>

<head>
	<title>Teste técnico REVICT</title>

	<meta charset="UTF-8">

<!-- jquery - link cdn -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- AJAX para requisições assíncronas -->
<script type="text/javascript" src="ajax.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="../estilo/estilo.css">

<!--Gliphy icon-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

		
</head>

<body >
	<div class="container">
	<div class="page-header"><h1>CRUD Orientado a Objeto</h1></div>
		<div class="row">
			
			<div class="col-md-12">

			<a href="#" type='button' class='btn btn-success' id="btnNovo"  ><i class="fas fa-plus-circle"></i> Cadastrar novo</button>
			</a>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="list-group" id="pessoas">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="list-group" id="pessoas">

							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
		
<div id="divs"></div>
	
</body>

</html>