<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DonateList
 *
 * @property int $id
 * @property int $list_id
 * @property string $type
 * @property string $content
 * @property boolean $is_saved
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property DonateList $donateList
 */
class Variant extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_saved' => 'boolean',
    ];

    public function donateList(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(DonateList::class, 'id', 'list_id');
    }
}