<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'category_name',
        'difficulty',
        'estimated_duration_days',
        'max_team_size',
        'num_of_team',
        'description',
        'user_id',
    ];
    public function teams():HasMany{
        return $this->hasMany(Team::class);
    }
    public function tasks():HasMany{
        return $this->hasMany(Task::class);
    }
    public function projectSkills():HasMany{
        return $this->hasMany(ProjectSkill::class);
    }
    public function projectInvitations():HasMany{
        return $this->hasMany(ProjectInvitation::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'projects_skills');
    }
    public function programmerActivities():HasMany{
        return $this->hasMany(ProgrammerActivity::class);
    }
    public function evaluations():HasMany{
        return $this->hasMany(Evaluation::class);
    }
    public function codeAnalyses():HasMany{
        return $this->hasMany(CodeAnalysis::class);
    }
}
