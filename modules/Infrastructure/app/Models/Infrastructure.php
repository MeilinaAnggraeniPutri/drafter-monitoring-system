<?php

namespace Modules\Infrastructure\app\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infrastructure extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Infrastructure\Database\factories\InfrastructureFactory::new();
    }
}
