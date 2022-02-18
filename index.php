<?php

if (isset($_GET['url'])) {
    var_dump($_GET['url']);
    if (file_exists('admin/'.$_GET['url'].'.php')) {
        include('admin/'.$_GET['url'] . '.php');
    } elseif (file_exists($_GET['url'].'.php')){
        var_dump($_GET['url']);
        include($_GET['url'] . '.php');
    } else{
        include('404.php');
    }
}else{
    include("login.php");
}
echo '<pre>';
print_r($_SERVER);
echo '</pre>';