<?php

function generatePasword($length, $repeat)
{
    $characters = "";

    if ($_GET['symbols'] == 'on') {
        $characters .= "$%&/=?^";
    }
    if ($_GET['numbers'] == 'on') {
        $characters .= "0123456789";
    }
    if ($_GET['letters'] == 'on') {
        $characters .= "abcdefghilmnopqrstuvz";
    }

    $randomPassword = '';

    if ($repeat == 'on') {
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
        }
    } else if ($repeat == 'off') {
        for ($i = 0; $i < $length; $i++) {
            $character = $characters[rand(0, strlen($characters) - 1)];
            $randomPassword .= $character;
            $characters = str_replace($character, "", $characters);
        }
    }

    return $randomPassword;
}




// $cose = 0;
// while ($cose < $length) {
//     $character = $characters[rand(0, strlen($characters) - 1)];
//     var_dump($character);
//     if (!strpos($randomPassword, $character)) {
//         $randomPassword .= $character;
//         $cose++;
//     }
// }




?>