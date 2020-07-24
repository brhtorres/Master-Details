<!--

-> Adicionar número de funcionários por departamento
-> Ajeitar imagens, botões e design

-->
<!DOCTYPE html>
<html>

<head>
	<title>Departamentos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">

		.topics {
			transition: all 0.5s;
			cursor: pointer;
			background-color: #63a4ff;
			width: 540px;
			height: 180px;
			margin-bottom: 13%; 
			border-radius: 10px;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.topics:hover{
			-webkit-transform: scale(1.1);
			transform: scale(1.1);
		}

		.col1 {
			position: relative;
			float: left;
			margin-left: 8%;
			margin-top: 13%;
		}

		.col2 {
			position: relative;
			float: right;
			margin-right: 8%;
			margin-top:13%;
		}

	</style>
</head>

<body>

	<?php
 
		$servername = "localhost";
		$username = "root";
		$password = "gladhesgone";
		$dbname = "dpto-database"; 

		$conn = mysqli_connect($servername, $username, $password);


		if (!$conn) {
		  die("Falha na Conexão: " . mysqli_connect_error());
		}
		echo "Conectado com Sucesso <BR><BR>";

		if (!mysqli_select_db($conn,$dbname)) {
		    echo "Não foi possível selecionar base de dados \"$dbname\": " . mysqli_error($conn);
		    exit;
		}
   
		$stmt = mysqli_stmt_init($conn);

		//devolve um boolen indicando se a string do stmt está ok
		$stmt_prepared_okay =  mysqli_stmt_prepare($stmt, "INSERT INTO employed (empName) VALUES (?)");   

		if ($stmt_prepared_okay) {
		    /*tipos possíveis de marcadores:
		      i - integer
		      d - double
		      s - string
		      b - BLOB*/
		    mysqli_stmt_bind_param($stmt, "s", $name,);
		    
		    $stmt_executed_okay = mysqli_stmt_execute($stmt);

		    if ($stmt_executed_okay) {
			   echo "Os registros foram inseridos com sucesso.";
		    } else {
		        echo "Não foi possível executar a inserção de ".
		             "$name no banco de dados" . 
		             mysqli_error($conn);
		        exit;
		    }
		      mysqli_stmt_close($stmt);
		}
		mysqli_close($conn);    

	?>
	

	<!--<div style="background-color: #3a6073; position: fixed; z-index: 100; top:0; width: 100%; height: 50px;">
		
	</div>-->


	<div class="col1">
		<div class="topics" >
			<a href="p2.php"></a>
			<div style="text-shadow: 0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 8%; margin-top: 5%; font-size: 36px"> <em>Departamento de RH</em></div>
		</div>	

		<div class="topics" >
			<a href="p3.php"></a>
			<div style="text-shadow: 0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 5%; margin-top: 3%; font-size: 36px"> <em> Departamento de Administração</em></div>
		</div>	

		<div class="topics" >
			<a href="p3.php"></a>
			<div style="text-shadow: 0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 5%; margin-top: 3%; font-size: 36px"> <em>Departamento de Contabilidade</em></div>
		</div>		

	</div>

	<div class="col2">

		<div class="topics">
			<a href="p4.php"></a>
			<div style="text-shadow: 0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 8%; margin-top: 5%; font-size: 36px"> <em>Departamento de Educação</em></div>
		</div>	

		<div class="topics" >
			<a href="p5.php"></a>
			<div style="text-shadow:0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 7%; margin-top: 5%; font-size: 36px"> <em>Departamento de Saúde</em></div>
		</div>	

		<div class="topics" >
			<a href="p5.php"></a>
			<div style="text-shadow:0.1em 0.1em rgba(0,0,0,0.5); font-family: fantasy; color: white; margin-left: 7%; margin-top: 5%; font-size: 36px"> <em>Departamento de Infraestrutura</em></div>
		</div>	

	</div>


</body>

</html>