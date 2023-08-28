<?php

$conn = mysqli_connect("localhost", "root", "", "nftp");

if( ! $conn ){
    die('Connection failed' );
}