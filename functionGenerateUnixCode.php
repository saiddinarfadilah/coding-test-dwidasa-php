<?php

function generateUnixCode($type)
{
    switch ($type){
        case 1 :
            $code = "CRE";
            break;
        case 2:
            $code = "DEB";
            break;
    }
    $date = date("Ymd");
    $number = rand(1111,9999);
    $unixCode = $code.$date.$number;
    echo $unixCode;
}

generateUnixCode(2); //DEB20221207****