<?php

if($_SERVER['SERVER_NAME'] == "localhost"){
    // Config Local
    define('DNS', 'mysql:host=localhost:3306;dbname=retail_store');
    define('USER', 'root');
    define('PASSWORD', '12345678');
}else{
    // Config Remota - Servidor
    define('DNS', 'mysql:host=localhost:3306;dbname=id19356966_retail_store');
    define('USER', 'id19356966_andersonchoren');
    define('PASSWORD', 'Z@@rf\MvT+%5yVDX');
}
