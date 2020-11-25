<?php

namespace App\Admin\Repositories;

use App\Models\SiteMenu as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SiteMenu extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
