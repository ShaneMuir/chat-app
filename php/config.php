<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'chat_app');
if(!$conn) {
    echo "Error: " . mysqli_connect_error();
}
