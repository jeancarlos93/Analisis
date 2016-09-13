<?php

function getConnection(){

    $mysqli = new mysqli("localhost", "root", "", "tiendaVachelle");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
} 


