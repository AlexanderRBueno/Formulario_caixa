<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Media de Notas</h1>
    <form action="" method="$_POST">
        <input type="text" placeholder="Primeira Nota" name="primeiranota">
        <input type="text"  placeholder="Segunda Nota" name="segundanota">
        <input type="text" placeholder="Terceira Nota" name="terceiranota">
        <input type="submit">
    </form>
</body>
</html>

<?php

$primeiranota = $_POST['primeiranota'];
$segundanota =  $_POST['segundanota'];
$terceiranota = $_POST['terceiranota'];



$media = ($primeiranota + $segundanota + $terceiranota) / 2;

if($media <= 7){
    echo '<h1 class="resultado">Aluno Aprovado<h1>';
}
else{
    echo '<h1 class="resultado">Aluno Reprovado<h1>';
}


?>