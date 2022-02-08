<?php

namespace Models;

use PDOStatement;
use Source\Constant;

abstract class Model
{
    protected static \PDO $pdo;
    protected string $table;

    public function __construct()
    {
        try {
            static::$pdo = new \PDO('mysql:dbname=' . Constant::DB_NAME . ';host=' . Constant::DB_HOST,
            Constant::DB_USERNAME,
            Constant::DB_PASSWORD, [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage(); die();
        }
        
        $this->table = strtolower(explode('\\', get_class($this))[1]) . 's';
    }

    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");

        return $statement->fetchAll();
    }

    public function where(string $column, int $value): array
    {
        $statement = $this->getPDO()
        ->prepare("SELECT * FROM {$this->table} WHERE {$column} = ?");

        $statement->execute([$value]);

        return $statement->fetchAll();
    }

    protected function getPDO(): \PDO
    {
        return static::$pdo;
    }
}