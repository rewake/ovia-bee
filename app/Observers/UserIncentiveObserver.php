<?php

namespace App\Observers;

use App\Models\UserIncentive;

class UserIncentiveObserver
{
    /**
     * Handle the UserIncentive "created" event.
     *
     * @param  \App\Models\UserIncentive  $userIncentive
     * @return void
     */
    public function created(UserIncentive $userIncentive)
    {
        app('incentives')->processIncentive($userIncentive);
    }

    /**
     * Handle the UserIncentive "updated" event.
     *
     * @param  \App\Models\UserIncentive  $userIncentive
     * @return void
     */
    public function updated(UserIncentive $userIncentive)
    {
        app('incentives')->processIncentive($userIncentive);
    }

    /**
     * Handle the UserIncentive "deleted" event.
     *
     * @param  \App\Models\UserIncentive  $userIncentive
     * @return void
     */
    public function deleted(UserIncentive $userIncentive)
    {
        //
    }

    /**
     * Handle the UserIncentive "restored" event.
     *
     * @param  \App\Models\UserIncentive  $userIncentive
     * @return void
     */
    public function restored(UserIncentive $userIncentive)
    {
        //
    }

    /**
     * Handle the UserIncentive "force deleted" event.
     *
     * @param  \App\Models\UserIncentive  $userIncentive
     * @return void
     */
    public function forceDeleted(UserIncentive $userIncentive)
    {
        //
    }
}
