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
        'is_urgent',
        'is_private',
        'status'
    ];

    protected $casts = [
        'is_urgent' => 'boolean',
        'is_private' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the formatted created date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('M j, Y \a\t g:i A');
    }

    /**
     * Get the status badge color
     */
    public function getStatusBadgeColorAttribute()
    {
        return match($this->status) {
            'pending' => 'warning',
            'approved' => 'success',
            'answered' => 'primary',
            'archived' => 'secondary',
            default => 'secondary'
        };
    }

    /**
     * Get the formatted request type
     */
    public function getFormattedRequestTypeAttribute()
    {
        return ucfirst(str_replace('_', ' ', $this->request_type));
    }

    /**
     * Scope for urgent prayers
     */
    public function scopeUrgent($query)
    {
        return $query->where('is_urgent', true);
    }

    /**
     * Scope for public prayers
     */
    public function scopePublic($query)
    {
        return $query->where('is_private', false);
    }

    /**
     * Scope for private prayers
     */
    public function scopePrivate($query)
    {
        return $query->where('is_private', true);
    }

    /**
     * Scope by status
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}