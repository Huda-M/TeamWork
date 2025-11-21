<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectInvitation extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectInvitationFactory> */
    use HasFactory;
    protected $fillable = [
        'project_id',
        'programmer_id',
        'invited_by',
        'status',
        'expires_at',
        ];
        public function invitedBy():BelongsTo{
            return $this->belongsTo(Programmer::class,'invited_by');
        }
        public function programmer():BelongsTo{
            return $this->belongsTo(Programmer::class);
        }
        public function project():BelongsTo{
            return $this->belongsTo(Project::class);
        }
}
