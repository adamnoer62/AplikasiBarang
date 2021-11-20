<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\ActivityLog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{

    use LogsActivity;

    protected $table ='activity_log';

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
