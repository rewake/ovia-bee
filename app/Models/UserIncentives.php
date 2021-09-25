<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserIncentives extends Model
{
    use HasFactory;

    public function incentive(): HasOne
    {
        return $this->hasOne(Incentives::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    // TODO: company relationship
}
