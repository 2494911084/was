<?php

namespace App\Observers;

use App\Models\SiteMenu;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SiteMenuObserver
{
    /**
     * Handle the SiteMenu "saved" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function saved(SiteMenu $siteMenu)
    {
        // $date = DB::table('site_menu')->get();
        $date = $siteMenu->with('category')->get();
        Cache::forever('was_site_menu', $date);
    }
    /**
     * Handle the SiteMenu "created" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function created(SiteMenu $siteMenu)
    {
        //
    }

    /**
     * Handle the SiteMenu "updated" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function updated(SiteMenu $siteMenu)
    {
        //
    }

    /**
     * Handle the SiteMenu "deleted" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function deleted(SiteMenu $siteMenu)
    {
        //
    }

    /**
     * Handle the SiteMenu "restored" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function restored(SiteMenu $siteMenu)
    {
        //
    }

    /**
     * Handle the SiteMenu "force deleted" event.
     *
     * @param  \App\Models\SiteMenu  $siteMenu
     * @return void
     */
    public function forceDeleted(SiteMenu $siteMenu)
    {
        //
    }
}
