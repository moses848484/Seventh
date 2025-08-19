<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Prayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'request_type',
        'prayer_request',
        'is_private',
        'is_urgent',
        'status',
        'admin_notes',
        'prayed_at',
    ];

    protected $casts = [
        'is_private' => 'boolean',
        'is_urgent' => 'boolean',
        'prayed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope for public prayers only
     */
    public function scopePublic($query)
    {
        return $query->where('is_private', false);
    }

    /**
     * Scope for urgent prayers
     */
    public function scopeUrgent($query)
    {
        return $query->where('is_urgent', true);
    }

    /**
     * Scope for recent prayers (within last 30 days)
     */
    public function scopeRecent($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->subDays(30));
    }

    /**
     * Get formatted request type
     */
    public function getFormattedRequestTypeAttribute()
    {
        return ucfirst(str_replace('_', ' ', $this->request_type));
    }

    /**
     * Get status badge class for UI
     */
    public function getStatusBadgeClassAttribute()
    {
        return match($this->status) {
            'pending' => 'badge-warning',
            'praying' => 'badge-info',
            'answered' => 'badge-success',
            'closed' => 'badge-secondary',
            default => 'badge-light'
        };
    }

    /**
     * Check if prayer is recent (within 7 days)
     */
    public function isRecent()
    {
        return $this->created_at->diffInDays(now()) <= 7;
    }
}