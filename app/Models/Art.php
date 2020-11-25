<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'arts';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
