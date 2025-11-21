<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    /** @use HasFactory<\Database\Factories\TeamMemberFactory> */
    use HasFactory;
    protected $fillable = [
        'team_id',
        'programmer_id',
        'role',
        'left_at',
    ];
    public function team():BelongsTo{
        return $this->belongsTo(Team::class);
    }
    public function programmer():BelongsTo{
        return $this->belongsTo(Programmer::class);
    }
}
