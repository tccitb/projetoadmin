<?php
include 'conexao/conecta.inc';

$cod=$_POST['id'];
$nome = $_POST['nome'];
$email =$_POST['email'];

$sql="update usuario_normal set NOME_USUARIO='$nome',EMAIL_USUARIO='$email' where COD_USUARIO=$cod";
    

if(mysql_query($sql)){
    echo 'Dados atualizados com sucesso !' . "<br>";
}else{
   echo 'Não foi possível atualizar o usuario! ' . "<br>";
}
    echo '<a href=listagem.php>Volta para listagem</a>';
?>
    
