<?php

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if ($email == 'asdfg@gmail.com' && $password == 'dombagarut') {
    header('Location: ./loginresult.html');
}

header('Location: ./errorresult.html');