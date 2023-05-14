<?php

namespace Modules\Infrastructure\app\Models;

use App\Models\User;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Revision\app\Models\Revision;

class Infrastructure extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [
        // 'title',
        // 'slug',
        // 'thumbnail',
        // 'body',
        'user_id',
        'file_pdf',
        'equipment',
        'nama_draw',
        'no_draw',
        'drafter',
        'revisi',
        'keterangan',
        'progress',
        'user_creaete',
    ];

    protected static function newFactory()
    {
        return \Modules\Infrastructure\database\factories\InfrastructureFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function revisions()
    {
        return $this->hasMany(Revision::class);
    }
}
