<?php

declare(strict_types=1);

namespace App\Models;

use PDO;

class Friend
{
    public static function getAll(): array
    {
        $pdo = new PDO('mysql:host=db;port=3306;dbname=reactivations;charset=utf8', 'root', '123456', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $friends = $pdo->query('SELECT * FROM Friend')->fetchAll();

        return $friends;
    }
    public static function find(int $id): array
    {
        $pdo = new PDO('mysql:host=db;port=3306;dbname=reactivations;charset=utf8', 'root', '123456', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $friend = $pdo->query("SELECT * FROM Friend WHERE id = {$id}")->fetch();

        return $friend;
    }
}
