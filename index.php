<?php

    require_once __DIR__ . '/autoload.php';

//    $user = new \App\Models\User();
//    $user->test();
    $users = App\Models\User::findAll();
    var_dump($users);

?>
