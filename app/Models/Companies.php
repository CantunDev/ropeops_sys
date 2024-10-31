<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'company_name',
        'slug',
        'rfc',
        'address',
        'cp',
        'telephone',
        'email',
        'credit_days',
        'bank',
        'account_number',
        'interbank_key',
        'card_number',
        'name_contact',
        'email_contact',
        'company_file'
    ];
}
