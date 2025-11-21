<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
    protected $fillable = [
        'team_id',
        'programmer_id',
        'project_id',
        'title',
        'description',
        'status',
        'estimated_hours',
        'actual_hours',
        'deadline',
    ];
    public function team():BelongsTo{
        return $this->belongsTo(Team::class);
    }
    public function programmer():BelongsTo{
        return $this->belongsTo(Programmer::class);
    }
    public function project():BelongsTo{
        return $this->belongsTo(Project::class);
    }
    public function codeAnalysis():HasOne{
        return $this->hasOne(CodeAnalysis::class);
    }
}
