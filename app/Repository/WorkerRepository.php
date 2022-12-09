<?php

namespace CodingTest\php\Repository;

use CodingTest\php\Domain\Worker;

class WorkerRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findAll():Worker
    {
        $sql = "SELECT * FROM Worker  ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        foreach ($statement as $row){
            $worker = new Worker();
            $worker->setIdWorker($row['idWorker']);
            $worker->setName($row['Name']);
            $worker->setBranchIdBranch($row['Branch_idBranch']);
            $worker->setPosition($row['Position']);
            return $worker;
        }
    }

    public function findById(int $id):?Worker
    {
        $sql = "SELECT idWorker, Name, Branch_idBranch, Position FROM Worker WHERE idWorker = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);

        if ($row = $statement->fetch()){
            $worker = new Worker();
            $worker->setIdWorker($row['idWorker']);
            $worker->setName($row['Name']);
            $worker->setBranchIdBranch($row['Branch_idBranch']);
            $worker->setPosition($row['Position']);
            return $worker;
        } else {
            return null;
        }
    }

    public function save(Worker $worker):Worker
    {
        $sql = "INSERT INTO Worker(idWorker, Name, Branch_idBranch, Position) VALUES (?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$worker->getIdWorker(), $worker->getName(), $worker->getBranchIdBranch(), $worker->getPosition()]);
        return $worker;
    }

    public function update(Worker $worker):Worker
    {
        $sql = "UPDATE Worker SET Name = ?, Branch_idBranch = ?,  Position = ? WHERE idWorker = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$worker->getName(), $worker->getBranchIdBranch(), $worker->getPosition(), $worker->getIdWorker()]);
        return $worker;
    }



    public function deleteById(int $id):void
    {
        $sql = "DELETE FROM Worker WHERE idWorker = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
    }
}