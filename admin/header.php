<header class="col-12 start">
<?php
    header('Content-Type: text/html; charset=utf-8');
    if(!isset($_SESSION)){
        session_start();
    }
    if (isset($_SESSION['id_user'])){
        echo '<a href=".#post" class="col-m-6 center" id="post"><nav>Post</nav></a><a href="user.php#user" class="col-m-6 center" id="user"><nav>User</nav></a>';
    }else{
        echo '<a href=".#post" class="col-m-6 center" id="post"><nav>Post</nav></a><a href="login.php#user" class="col-m-6 center" id="user"><nav>Login</nav></a>';
    }
?>
</header>
