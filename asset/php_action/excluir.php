<?php
    require_once"connect_db.php";
?>
<?php
    session_start();
	$id = mysqli_escape_string($connect, $_POST['id']);
	$sql = "DELETE FROM cliente WHERE id = '$id'";
	if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
		
    }	
	else{
        $_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: index.php');
    }
		

?>
