<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserIncentive extends Model
{
    use HasFactory;

    protected $fillable = [
        'completed',
        'completed_at',
    ];

    protected $table = 'user_incentives';

    public function incentive(): HasOne
    {
        return $this->hasOne(Incentives::class, 'id');
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
