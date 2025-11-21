<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectsSkills extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectSkillFactory> */
    use HasFactory;
    protected $fillable = [
        'project_id',
        'skill_id',
    ];
    public function skill():BelongsTo{
        return $this->belongsTo(Skill::class);
    }
    public function project():BelongsTo{
        return $this->belongsTo(Project::class);
    }
}
