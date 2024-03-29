<?php

namespace App\Core;

class Database
{

    private \PDO|null $pdo = null;

    public function connexionBD(): void
    {
        $this->pdo = new \PDO("mysql:dbname=poo_td4;host=localhost:3306", "user_poo", "userPoo");
       
    }

    public function closeConnexion()
    {
        $this->pdo = null;

    }

    public function executeSelect(string $sql, array $data = [], bool $single = false): object|array|null
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        if ($single) {

            $result = $query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount()==0) return null;
        } else {
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }

    public function executeUpdate(string $sql, array $data = []): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        return $query->rowCount()>=1 ? $this->pdo->lastInsertId() : $query->rowCount();
    }
}
