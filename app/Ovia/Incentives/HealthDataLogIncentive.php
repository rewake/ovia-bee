<?php

namespace App\Ovia\Incentives;

class HealthDataLogIncentive extends AbstractIncentive implements IncentiveInterface
{
    private int $days = 5;

    public function process(): void
    {
        // See if there have been logs entered for at least $days min
        if (count($this->userIncentive->data) >= $this->days) {

            // Mark incentive complete
            $this->complete();
        }
    }
}
