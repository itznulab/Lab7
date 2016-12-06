<?php
return [
    "SiteName" => "Sttest1.zzz.com.ua",
    "AuthorName" => "Vorobiov Kostyantin",
    "ControllersAction" => "Default action",
    "DefaultRoute" => "site/index",
    "components" => [
        "twig" => [
            "cache_path" => "./../core/Templates/cache",
            "template_path" => "./../core/Templates",
        ],
        "db"=>[
            'driver' => 'mysql',
            'host' => '',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
    ],
];

