<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prescription;

class PharmacyUser extends Model
{
    use HasFactory;

    protected $table='pharmacy_users';
    protected $primaryKey ='id';
    protected $fillable = [
        'drug',
        'quantity',
        'amount ',
        'total',
        'photo',
        
    ];


}
