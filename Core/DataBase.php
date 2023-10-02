<?php

namespace Core;

use PDO;
use PDOException;
use PDOStatement;

class DataBase
{
    public PDO $connection;
    public PDOStatement $statement;

    public function __construct($config, $username = 'geni', $password = 'geni')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function query($query, $params = []): static
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get(): false|array
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result)
        {
          abort();
        }

        return $result;
    }

}