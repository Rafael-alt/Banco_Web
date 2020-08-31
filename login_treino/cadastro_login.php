<?php

require_once('conexao/banco.php');


$login = $_REQUEST['txt_login'];
$senha = $_REQUEST['txt_senha'];

$sql = "insert into tb_login (log_login, log_senha)
                                values ('$login', '$senha')";

 mysqli_query($con, $sql) or die ("Erro na SQL!");
//header("Location: consulta_login.php");                               


?>