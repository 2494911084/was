<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class SiteMenu extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'site_menu';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
