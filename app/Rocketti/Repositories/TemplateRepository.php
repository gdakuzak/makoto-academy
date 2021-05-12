<?php

namespace App\Rit\Repositories;

use App\Rocketti\Models\Template;

class TemplateRepository
{
    /**
     * @var Role
     */
    private $model;

    /**
     * Template Repository constructor.
     * @param Template $template
     */
    public function __construct(Template $template)
    {
        $this->model = $template;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}
