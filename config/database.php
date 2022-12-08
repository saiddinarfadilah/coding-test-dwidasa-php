<?php

function getDatabaseConfig():array
{
    return [
        "database" => [
            "dev" => [
                "url"       => "mysql:host=localhost;dbname=db_dwidasa",
                "user"      => "root",
                "password"  => "root",
            ]
        ]
    ];
}