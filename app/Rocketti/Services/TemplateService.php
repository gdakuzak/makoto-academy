<?php

namespace App\Rocketti\Services;

use App\Rocketti\Repositories\TemplateRepository;

class TemplateService
{
     /**
     * @var TemaplteRepository
     */
    private $repository;
    
     /**
     * @var ClienteService
     */
    private $templateRepository;
    
    /**
     * Template Service constructor.
     * @param TemplateRepository $templateRepository
     */
    public function __construct(TemplateRepository $templateRepository)
    {
        $this->repository = $templateRepository;
    }

    /**
     * @return mixed
     */
    public function renderList()
    {
        return $this->repository->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function renderEdit($id)
    {
        return $this->repository->getById($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function buildUpdate($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function buildInsert($data)
    {
        $account = $this->repository->create($data);
        return $account;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id)
    {
        return $this->repository->delete($id);
    }
}
