<?php

namespace App\Admin\Repositories;

use App\Models\Art as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Art extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
