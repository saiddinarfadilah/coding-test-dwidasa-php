<?php

namespace CodingTest\php\Controller;

use CodingTest\php\App\View;
use CodingTest\php\Config\Database;
use CodingTest\php\Model\WorkerAddRequest;
use CodingTest\php\Repository\WorkerRepository;
use CodingTest\php\Domain\Worker;
use CodingTest\php\Service\WorkerService;

class WorkerController
{
    private WorkerRepository $workerRepository;
    private WorkerService $workerService;

    public function __construct()
    {
        $this->workerRepository = new WorkerRepository(Database::getConnection());
        $this->workerService = new WorkerService($this->workerRepository);
    }

    public function index():void
    {
        $worker = $this->workerRepository->findAll();
        $model = [
            'title' => 'worker',
            'worker' => [
                'id' => $worker->getIdWorker(),
                'name' => $worker->getName(),
                'branch' => $worker->getBranchIdBranch(),
                'position' => $worker->getPosition()
            ]
        ];
        View::render("Worker/index", $model);
    }

    public function formAdd():void
    {
        $model = [
            'title' => 'Add Worker'
        ];
        View::render("Worker/add", $model);
    }

    public function postAdd():void
    {
        $request = new WorkerAddRequest();
        $request->setIdWorker($_POST['id']);
        $request->setName($_POST['name']);
        $request->setBranchIdBranch($_POST['branchidbranch']);
        $request->setPosition($_POST['position']);

        $this->workerService->add($request);
        View::redirect("/worker");
    }

    public function destroy():void
    {

    }
}