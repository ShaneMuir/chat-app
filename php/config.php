<?php

// Set mode for production / development
const MODE = 'dev';

if(MODE == 'production'):
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
else:
    $conn = mysqli_connect('localhost', 'root', 'root', 'chat-app');
endif;

if(!$conn) {
    echo "Error: " . mysqli_connect_error();
}
