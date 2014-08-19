<?php
include 'conexao/conecta.inc';

$buscaDadosBancoDeDados = "SELECT * FROM usuario_normal";

$busca = mysql_query($buscaDadosBancoDeDados) or die (mysql_error());

while( $usuario = mysql_fetch_array($busca))
{
    $cod=$usuario['COD_USUARIO'];
    
    echo ' 
     <h3> Dados Usuarios <h3>
    
     Nome: '.$usuario['NOME_USUARIO'] .'<br>
     Email:  '.$usuario['EMAIL_USUARIO'] .'<br>
     Tipo_Usuario: '.$usuario['TIPO_USUARIO'] .'<br>
        
    

     

         
    
    
    
    ';
        echo"<a href=atualizar.php?id=$cod> Editar </a>"; echo"<a href=delete.php?id=$cod> Deletar </a>";
}


