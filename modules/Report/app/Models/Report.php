<?php

namespace Modules\Report\app\Models;

use App\Models\User;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [
        'title',
        'attach',
        'description',
        'user_id',
    ];

    protected $hidden = [
        'user_id'
    ];

    protected static function newFactory()
    {
        return \Modules\Report\Database\factories\ReportFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
