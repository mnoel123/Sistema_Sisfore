<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class planillas extends Model
{   
    protected $table='planillas';
    protected $primaryKey='COD_PLANILLA';
    public $timestamps = false;
    protected $fillable =[
    'COD_PLANILLA',
    'COD_AFILIADO',
    'FEC_PAGO',
    'DENOMINACION',
    'VAL_PAGADO',
    'VAL_APOR_MENSUAL',
    'USR_REGISTRO',
    'FEC_REGISTRO',
    ];

    use HasFactory;
}

