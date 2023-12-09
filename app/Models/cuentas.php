<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class cuentas extends Model
{   
    protected $table='cuentas';
    protected $primaryKey='COD_CUENTA';

    protected $fillable =[
        'OPERACION',
        'COD_CTA_MAYORES',
        'TIP_CUENTA',
        'NUM_SUBCUENTA',
        'NOM_SUBCUENTA',
        'MOVIMIENTO',
        'USR_REGISTRO',
    ];

    use HasFactory;
}

