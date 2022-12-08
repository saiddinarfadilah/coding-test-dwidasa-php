<?php

namespace CodingTest\php\Model;

class WorkerAddRequest
{
    private ?string $idWorker;
    private ?string $name;
    private int $branchIdBranch;
    private ?string $position;

    /**
     * @return string|null
     */
    public function getIdWorker(): ?string
    {
        return $this->idWorker;
    }

    /**
     * @param string|null $idWorker
     */
    public function setIdWorker(?string $idWorker): void
    {
        $this->idWorker = $idWorker;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
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

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     */
    public function setPosition(?string $position): void
    {
        $this->position = $position;
    }


}