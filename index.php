<?php

    require_once __DIR__ . '/autoload.php';

    $users = App\Models\User::findAll();
    $one_user = App\Models\User::findById(3);
    var_dump($one_user);

?>
