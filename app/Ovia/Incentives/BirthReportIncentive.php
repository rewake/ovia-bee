<?php

namespace App\Ovia\Incentives;

class BirthReportIncentive extends AbstractIncentive implements IncentiveInterface
{
    public function process(): void
    {
        // Given we found a UserIncentive in __construct() (user has recorded a birth),
        // this incentive rule can be marked as complete with no further processing.
        $this->complete();
    }
}
