<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function projectSkills():HasMany{
        return $this->hasMany(ProjectSkill::class);
    }
    public function programmerSkills():HasMany{
        return $this->hasMany(ProgrammerSkill::class);
    }
    public function programmers():BelongsToMany
    {
        return $this->belongsToMany(Programmer::class, 'programmer_skills');
    }
    public function projects():BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'projects_skills');
    }
}
