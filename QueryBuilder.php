<?php

class QueryBuilder {
    
    public PDO $pdo;
    
    public string $model;
    
    public function __construct(PDO $pdo, string $model)
    {
        $this->pdo = $pdo;
        $this->model = $model;
    }
    
    public function selectAll()
    {
        $statement = $this->pdo->prepare('select * from ' . $this->model);

        $statement->execute();

        return $statement->fetchAll(
            PDO::FETCH_ASSOC
        );
    }

    
}