<?php

namespace App\Models;

// use Haruncpi\LaravelIdGenerator\IdGenerator;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyQuote extends Model
{
    use HasFactory;
    protected $table = 'quotes_companies';
    
    protected $fillable = [
        'folio',
        'title',
        'description',
        'address',
        'cp',
        'date',
        'contact_name',
        'contact_phone',
        'contact_email',
        'condition_payment',
        'advance_payment',
        'workdays',
        'company_id',
        'service_id',
        'user_id',
        'subtotal',
        'iva',
        'amount',
        // 'start',
        'credit_days',
        // 'notes',
        
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->folio = IdGenerator::generate(['table' => 'quotes_companies', 'field' => 'folio', 'length' => 12,'prefix' =>'COT-TASR-']);});
    }   
    
    /**
     * Get the user that owns the CompanyQuote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function companies(): BelongsTo
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }

    /**
     * Get the users that owns the CompanyQuote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
