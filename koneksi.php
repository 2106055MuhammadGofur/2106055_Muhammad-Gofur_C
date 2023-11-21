<?php

$db = mysqli_connect("localhost","root","","2106055_gofur");

if (!$db){
    echo"<script> 
            alert('database tidak terhubung...')
        </script>";                                                     
}

?>