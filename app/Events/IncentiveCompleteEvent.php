<?php

namespace App\Events;

use App\Models\UserIncentive;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IncentiveCompleteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public UserIncentive $incentive;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(UserIncentive $userIncentive)
    {
        $this->incentive = $userIncentive;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
