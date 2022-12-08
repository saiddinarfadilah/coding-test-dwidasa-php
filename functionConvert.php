<?php

function convertToString($number)
{
    $result = "Rp " . number_format($number, 0, ',','.');
    return $result;
}

echo convertToString(10000); // Rp. 10.000