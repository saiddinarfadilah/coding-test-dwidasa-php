<?php

namespace CodingTest\php\Domain;

class Client
{
    private string $idClient;
    private string $name;
    private int $branchIdBranch;

    /**
     * @return string
     */
    public function getIdClient(): string
    {
        return $this->idClient;
    }

    /**
     * @param string $idClient
     */
    public function setIdClient(string $idClient): void
    {
        $this->idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getBranchIdBranch(): int
    {
        return $this->branchIdBranch;
    }

    /**
     * @param int $branchIdBranch
     */
    public function setBranchIdBranch(int $branchIdBranch): void
    {
        $this->branchIdBranch = $branchIdBranch;
    }


}