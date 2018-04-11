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

    public static function findById($id)
    {
        $db = new \App\Db();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id = :id',
            static::CLASS,
            [':id' => $id]
        );
        if (empty($res)) {
            return false;
        } else {
            return $res;
        }
    }
}