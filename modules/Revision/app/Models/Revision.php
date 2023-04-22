<?php

namespace Modules\Revision\app\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revision extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'revisi',
        'infrastructure_id',
        'user_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Revision\Database\factories\RevisionFactory::new();
    }
}
