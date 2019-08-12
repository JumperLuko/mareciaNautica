<?php
@$conexao = mysqli_connect(localhost,'root','bobamanga','wwwmare_postagem');
if ($conexao == false) {
    echo mysqli_connect_error.'<br>';
}
?>
