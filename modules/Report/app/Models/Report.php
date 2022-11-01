<?php

namespace Modules\Report\app\Models;

use App\Models\User;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Report\app\Enums\StatusEnum;

class Report extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [
        'title',
        'attach',
        'description',
        'status',
        'user_id',
    ];

    protected $hidden = [
        'user_id'
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    protected static function newFactory()
    {
        return \Modules\Report\database\factories\Report\ReportFactory::new();
    }

    /**
     * attribute
     */
    public function attach(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value)
        );
    }

    /**
     * relation eloquent
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * proced columns
     */
    public function getStatusColor()
    {
        return $this->status->value === 'Pending' ? 'primary'
            : ($this->status->value === 'Processed' ? 'secondary'
                : ($this->status->value === 'Accepted' ? 'success'
                    : ($this->status->value === 'Rejected' ? 'warning'
                        : ($this->status->value === 'Closed' ? 'danger'
                            : ''))));
    }
}
