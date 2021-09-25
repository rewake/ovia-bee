<?php

namespace App\Services;

use App\Models\UserIncentive;

class IncentiveService
{
    /**
     * @param UserIncentive $userIncentive
     */
    public function processIncentive(UserIncentive $userIncentive)
    {
        // Instantiate Incentive
        $incentive = new $userIncentive->incentive->class_name($userIncentive->id);

        // Process Incentive
        $incentive->process();
    }
}
