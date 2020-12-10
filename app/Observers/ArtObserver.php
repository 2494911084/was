<?php

namespace App\Observers;

use App\Models\Art;

class ArtObserver
{
    /**
     * Handle the Art "saving" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function saving(Art $art)
    {
        $art->excerpt = make_excerpt($art->content, 100);
    }
    /**
     * Handle the Art "created" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function created(Art $art)
    {
        //
    }

    /**
     * Handle the Art "updated" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function updated(Art $art)
    {
        //
    }

    /**
     * Handle the Art "deleted" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function deleted(Art $art)
    {
        //
    }

    /**
     * Handle the Art "restored" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function restored(Art $art)
    {
        //
    }

    /**
     * Handle the Art "force deleted" event.
     *
     * @param  \App\Models\Art  $art
     * @return void
     */
    public function forceDeleted(Art $art)
    {
        //
    }
}
