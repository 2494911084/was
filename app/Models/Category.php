<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasDateTimeFormatter, ModelTree;

    public function arts()
    {
        return $this->hasMany(Art::class);
    }

    public function tj_arts()
    {
        return $this->hasMany(Art::class)->where('is_tuijian', 1);
    }
}
