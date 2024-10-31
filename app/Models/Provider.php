<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';

    protected $fillable = [
        'name',
        'company_name',
        'slug',
        'email',
        'telephone',
        'rfc',
        'address',
        'cp',
        'credit_days',
        'bank',
        'account_number',
        'interbank_key',
        'card_number',
        'name_contact',
        'phone_contact',
        'email_contact',
        'provider_file'
    ];


}
