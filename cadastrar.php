<?php

include_once('conexao.php')

$nome		= $_POST ["firstname"];
$email		= $_POST ["email"];
$telefone	= $_POST ["telefone"];
$endereco 	= $_POST ["andress"];
$sexo		= $_POST ["sexo"];
$mensagem = $_POST ["subject"];
//Gravando no banco de dados !


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "INSERT INTO contato(nome, email, endereco, telefone, sexo, mensagem)


VALUES ('$nome', '$email', '$endereco',
		'$telefone', '$sexo', '$mensagem'"");

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
// SUCESSO!
?>
