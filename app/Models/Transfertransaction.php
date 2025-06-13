<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfertransaction extends Model
{
    use HasFactory;

    protected $fillable = [

        'session_id',
        'amount',
        'email',
        'account_no',
        'ref_trans_id'

    ];
}
