<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'create_date', 
        'carp_code', 
        'category',
        'initiator',
        'initiator_div',
        'initiator_branch',
        'recipient',
        'recipient_div',
        'recipient_branch',
        'verified_by',
        'due_date',
        'effectiveness',
        'status_date',
        'stage',
        'status',
    ];

}
