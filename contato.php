<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $nome = ($_POST['Nome']);
    $email = ($_POST['Email']);

    $result = mysqli_query($conexao, "INSERT INTO contatos VALUES ('$nome', '$email')")
}
?>