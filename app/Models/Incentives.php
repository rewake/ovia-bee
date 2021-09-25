<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Incentives extends Model
{
    use HasFactory;

    public function userIncentives(): HasMany
    {
        return $this->hasMany(UserIncentives::class, 'incentive_id');
    }

    // TODO: company relationship
}
