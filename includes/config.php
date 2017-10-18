<?php

const DB_PATH = "127.0.0.1";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "test_blog";

$config = ['title' => 'Andrii Hordynskyi',
    'db' => ['server' => DB_PATH,
        'username' => DB_LOGIN,
        'password' => DB_PASSWORD,
        'name' => DB_NAME
    ]
];

require "db.php";