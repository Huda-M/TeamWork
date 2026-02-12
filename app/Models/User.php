<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'user_name',
        'email',
        'password',
        'phone',
        'gender',
        'role',
        'bio',
        'country',
        'date_of_birth',
        'img_url',
    ];
    public function userAuth():HasOne{
        return $this->hasOne(UserAuth::class);
    }
    public function projects():HasMany{
        return $this->hasMany(Project::class);
    }
    public function programmer():belongsTo{
        return $this->belongsTo(Programmer::class);
    }
    public function company():HasOne{
        return $this->hasOne(Company::class);
    }
    public function notifications():HasMany{
        return $this->hasMany(Notification::class);
    }
    public function reported():HasMany{
        return $this->hasMany(Report::class,'target_user_id');
    }
    public function reporter():HasMany{
        return $this->hasMany(Report::class,'reporter_user_id');
    }
    public function admin():HasMany{
        return $this->hasMany(Report::class,'admin_id');
    }
    public function directMessage():HasMany{
        return $this->hasMany(DirectMessage::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
}
