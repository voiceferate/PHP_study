<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 09.04.18
 * Time: 11:26
 */

namespace App;


class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new \App\Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::CLASS
        );
    }
}