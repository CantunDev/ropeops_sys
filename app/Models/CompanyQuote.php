<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyQuote extends Model
{
    use HasFactory;
    protected $table = 'quotes_companies';
}
