<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'chat_app');
if($conn) {
    echo "Connected";
} else {
    echo "Error";
}