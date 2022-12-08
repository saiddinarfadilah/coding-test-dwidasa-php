<?php

namespace CodingTest\php\Service;

use CodingTest\php\Domain\Worker;
use CodingTest\php\Model\WorkerAddRequest;
use CodingTest\php\Model\WorkerAddResponse;
use CodingTest\php\Repository\WorkerRepository;

class WorkerService
{
    private WorkerRepository $workerRepository;

    public function __construct(WorkerRepository $workerRepository)
    {
        $this->workerRepository = $workerRepository;
    }

    public function show():void
    {
        $this->workerRepository->findAll();
    }

    public function add(WorkerAddRequest $request):WorkerAddResponse
    {
        $worker = new Worker();
        $worker->setIdWorker($request->getIdWorker());
        $worker->setName($request->getName());
        $worker->setBranchIdBranch($request->getBranchIdBranch());
        $worker->setPosition($request->getPosition());

        $this->workerRepository->save($worker);

        $response = new WorkerAddResponse();
        $response->worker = $worker;
        return $response;
    }

}