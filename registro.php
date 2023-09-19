<?php
$produto=$_POST['produto'];
$quant=$_POST['quantidade'];
$preco=$_POST['preco'];

$conexao = @mysqli_connect('localhost', 'root', 'usbw', 'lista')
	or die ("Problemas com a conexão do Banco de Dados");
	$query="INSERT INTO `Produtos`(`Codigo`, `Produto`, `Quantidade`, `Preco`) VALUES(NULL,'$produto','$quant','$preco')";
	
	mysqli_query($conexao, $query) or die ("erro de instrução");
	
	header('Location: noticia2.php');
?>