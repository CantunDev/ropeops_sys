<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


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

    /**
     * Get all of the comments for the Companies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes(): HasMany
    {
        return $this->hasMany(CompanyQuote::class, 'company_id');
    }

}
