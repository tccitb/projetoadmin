<?php
include 'conexao/conecta.inc';

$cod=$_GET['id'];


$sql="delete from usuario_normal  where COD_USUARIO=$cod";
    

if(mysql_query($sql)){
    echo 'Dados deletados com sucesso !' . "<br>";
}else{
   echo 'Não foi possível deletar o usuario! ' . "<br>";
}
    echo '<a href=listagem.php>Volta para listagem</a>'
?>