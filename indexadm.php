<?php

echo '<meta charset="UTF-8">';
include_once 'includes/funcoesUteis.inc';
validaAutenticacao('frmlogin.php','ADM');
echo '<h2>Página Inicial - Ambiente Administrativo</h2>';
echo '<a href=logout.php?p=admin.php>Logout</a> </br>'; 
 echo '<a href=listagem.php>Listar Usuario </a>';