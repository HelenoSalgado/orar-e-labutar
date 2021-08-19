<?php
   $Host = 'fdb29.awardspace.net';
   $Username = '3521549_3521549labutar';
   $Password = 'Didrako-12';
   $Name = '3521549_3521549labutar';

   $conexao = new mysqli($Host,$Username,$Password,$Name);
   
   if($conexao->connect_errno)
   {
       echo "Error";
   }
   else
   {
       echo "conexão efetuada com sucesso";
   }
?>