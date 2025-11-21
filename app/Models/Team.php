<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'formation_type',
        'status',
        'project_id',
        'disbanded_at',
    ];
    public function teamMessages():HasMany{
        return $this->hasMany(TeamMessage::class);
    }
    public function teamMembers():HasMany{
        return $this->hasMany(TeamMember::class);
    }
    public function project():BelongsTo{
        return $this->belongsTo(Project::class);
    }
    public function tasks():HasMany{
        return $this->hasMany(Task::class);
    }
}
