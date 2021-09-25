<?php

namespace App\Ovia\Incentives;

use App\Events\IncentiveCompleteEvent;
use App\Models\UserIncentive;
use Carbon\Carbon;

class AbstractIncentive
{
    protected UserIncentive $userIncentive;

    public function __construct(int $userIncentiveId)
    {
        // Find & store user incentive or fail (throws exception)
        $this->userIncentive = UserIncentive::findOrFail($userIncentiveId);
    }

    public function complete()
    {
        // Mark incentive complete
        $this->userIncentive->update([
            'completed' => true,
            'completed_at' => Carbon::now()
        ]);

        // Fire incentive complete event
        event(new IncentiveCompleteEvent($this->userIncentive));
    }
}
