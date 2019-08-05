<?php

session_start();
include_once("conexao.php");

$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
$Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$Opcao = filter_input(INPUT_POST, 'Opcao', FILTER_SANITIZE_STRING);
$Mensagem = filter_input(INPUT_POST, 'Mensagem', FILTER_SANITIZE_STRING);


// campos da tabela do bd


$result_cliente = "INSERT INTO cliente    cliente (Nome, Email, Telefone, Opcao, Mensagem) VALUES ('$Nome', $Email', '$Telefone', '$Opcao', 'Mensagem')";
$resultado_cliente = mysqli_query($conn, $result_cliente);


if(mysql_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Pedido de orçamento enviado com sucesso</p>";
	header("Location: contato.php");

}else{
	$_SESSION['msg'] = "<p style='color:red;'Não foi possivel enviar seu email, por favor verifique os campos e tente novamente.</p>";
	header("Location: contato.php");
}
