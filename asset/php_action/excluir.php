<?php
    require_once"connect_db.php";
?>
<?php
       //deletando usuario do banco de dados
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "DELETE FROM cliente WHERE id = '$id'";
	if(mysqli_query($connect, $sql)){
		echo "<div class='alert-success'>Deletado com Sucesso!</div>";
		header('Location: ../../listarCliente.php');	
    }	
	else{
		echo "<div class='alert-success'>Erro ao Deletar!</div>";
	        header('Location: ../../listarCliente.php');
    }
		

?>
