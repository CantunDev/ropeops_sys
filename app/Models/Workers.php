<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workers extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'workers';
    protected $fillable = [
        'name',
        'lastname',
        'surname',
        'phone',
        'email',
        'password',
        'birthday',
        'ine',
        'nss',
        'curp',
        'address',
        'cp',
        'bank',
        'account_number',
        'interbank_key',
        'card_number',
        'overalls_size',
        'shoe_number',
        'blood_type',
        'worker_file'
    ];
    protected $appends = ['fullname'];

    public function getFullNameAttribute()
    {
        // return "{$this->name} {$this->lastname} {$this->surname}";
        return $this->name  . ' ' .  $this->lastname . ' ' . $this->surname;

    }
}
