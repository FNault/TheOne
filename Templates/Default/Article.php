<?php
	var_dump(_DatasGet('localhost', 'root', '', 'E-CMS', 'Users', 'last_name'));
	//var_dump(_DataSet('localhost', 'root', '', 'E-CMS', 'Users', 'id:null,first_name:Patate,last_name:Pilées,password:Menoume,localisation:Montréal,username:Test,email:test@test.com'));
	$Article = $_GET['Article'];
	$Articles = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'Articles', 'url');

	if($Articles !=$Article){
		header("location:404.php");
	}
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<meta name="Author" content=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>