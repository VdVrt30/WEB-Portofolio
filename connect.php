<?php

function connection($table){
    $conn = mysqli_connect('localhost', 'root', '', 'portofolio');
    $query = mysqli_query($conn, 'SELECT * FROM ' . $table);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}