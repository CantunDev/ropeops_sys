<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyQuoteDetail extends Model
{
    use HasFactory;
    protected $table = 'quotes_companies_details';
    protected $fillable = [
        'description',
        'quantity',
        'unit_price',
        'amount',
        'quote_company_id' 
       ];
}
