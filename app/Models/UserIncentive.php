<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserIncentive extends Model
{
    use HasFactory;

    protected $table = 'user_incentives';

    public function incentive(): HasOne
    {
        return $this->hasOne(Incentives::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    // TODO: company relationship

    public function getDataAttribute($value)
    {
        return json_decode($value);
    }
}
