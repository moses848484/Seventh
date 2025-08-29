<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage; // Add this at the top of your model
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'profile_photo_path',
        'current_team_id',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getProfilePhotoUrlAttribute()
    {
        try {
            $path = $this->profile_photo_path;

            // Check if file exists in public storage
            if ($path && Storage::disk('public')->exists($path)) {
                return asset('storage/' . $path);
            }
        } catch (\Throwable $e) {
            // Prevent 500 by catching storage issues
            \Log::error('Error checking profile photo path: ' . $e->getMessage());
        }

        // Fallback to default image
        return asset('storage/profile-photos/user.jpg');
    }

    /**
     * Get the user's notes.
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class)->orderBy('pinned', 'desc')->orderBy('created_at', 'desc');
    }

    /**
     * Get the user's pinned notes.
     */
    public function pinnedNotes(): HasMany
    {
        return $this->hasMany(Note::class)->where('pinned', true)->orderBy('created_at', 'desc');
    }

    /**
     * Get count of user's notes.
     */
    public function getNotesCountAttribute(): int
    {
        return $this->notes()->count();
    }

    /**
     * Get count of user's pinned notes.
     */
    public function getPinnedNotesCountAttribute(): int
    {
        return $this->pinnedNotes()->count();
    }
}