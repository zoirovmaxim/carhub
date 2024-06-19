<?php
$conectare = mysqli_connect('localhost', 'root', '', 'webcar');

if(!$conectare){
    die(mysqli_connect_error());
}