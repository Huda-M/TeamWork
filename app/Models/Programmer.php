<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Programmer extends Model
{
    /** @use HasFactory<\Database\Factories\ProgrammerFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'specialty',
        'total_score',
        'github_username',
    ];
    public function teamMessages():HasMany{
        return $this->hasMany(TeamMessage::class);
    }
    public function teamMembers():HasMany{
        return $this->hasMany(TeamMember::class);
    }
    public function tasks():HasMany{
        return $this->hasMany(Task::class);
    }
    public function programmerSkills():HasMany{
        return $this->hasMany(ProgrammerSkill::class);
    }
    public function programmerLevel():HasOne{
        return $this->hasOne(ProgrammerLevel::class);
    }
    public function programmerBadges():HasMany{
        return $this->hasMany(ProgrammerBadge::class);
    }
    public function programmerActivities():HasMany{
        return $this->hasMany(ProgrammerActivity::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function codeAnalyses():HasMany{
        return $this->hasMany(CodeAnalysis::class);
    }
    public function sentinvitations():HasMany{
        return $this->hasMany(ProjectInvitation::class,'invited_by');
    }
    public function receivedinvitations():HasMany{
        return $this->hasMany(ProjectInvitation::class,'programmer_id');
    }
    public function evaluated():HasMany{
        return $this->hasMany(Evaluation::class,'evaluated_id');
    }
    public function evaluator():HasMany{
        return $this->hasMany(Evaluation::class,"evaluator_id");
    }
    public function interview():HasMany{
        return $this->hasMany(Interview::class);
    }
    public function ComAndProEvaluation():HasMany{
        return $this->hasMany(ComAndProEvaluation::class);
    }
    public function conversation():HasMany{
        return $this->hasMany(Conversation::class);
    }
}
