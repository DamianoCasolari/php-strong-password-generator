<?php

function generatePasword($length)
{
    $characters = '0123456789abcdefghilmnopqrstuvz$%&/=?^';
    $randomPasword = '';

    for ($i = 0; $i < $length; $i++) {
        $randomPasword .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomPasword;
}



?>