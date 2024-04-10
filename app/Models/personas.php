<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class personas extends Model
{   
    protected $table='personas';
    protected $primaryKey='COD_PERSONA';
    public $timestamps = false;
    protected $fillable =[
        'OPERACION',
    	'COD_PERSONA',
        'NUM_IDENTIDAD',
        'NOM_PERSONA',
        'APE_PERSONA',
        'SEX_PERSONA',
        'FEC_NACIMIENTO',
        'TIP_ESTADO',
        'ESTADO_CIVIL',
        'EMAIL',
        'COD_TELEFONO',
        'TIP_TELEFONO',
        'NUM_TELEFONO',
        'IND_TELEFONO',
        'DES_TELEFONO',
        'COD_DIRECCION',
        'DEPARTAMENTO',
        'MUNICIPIO',
        'COLONIA',
        'DES_DIRECCION',
        'COD_AFILIADO',
        'NUM_AFILIADO',
        'DENOMINACION',
        'COD_BENEFICIARIO',
        'NOM_COMPLETO_B1',
        'PORCENTAJE_B1',
        'NOM_COMPLETO_B2',
        'PORCENTAJE_B2',
        'NOM_COMPLETO_B3',
        'PORCENTAJE_B3',
        'NOM_COMPLETO_B4',
        'PORCENTAJE_B4',
        'NOM_COMPLETO_B5',
        'PORCENTAJE_B5',
        'COD_USUARIO',
        'CONTRASENA',
        'NOM_USUARIO',
        'TIP_USUARIO',
        'IND_USUARIO',
        'PRI_ACCESS',
        'IP_ULT_ACCESS',
        'USR_REGISTRO',
        'FEC_REGISTRO',
    ];

    use HasFactory;
    use App\Models\Persona;

    public function eliminarPersona($COD)
    {
        // Encuentra la persona por ID con las relaciones cargadas
        $personas = Personas::with('BENEFICIARIOS', 'DIRECCION', 'AFILIADOS', 'USUARIOS')->find($COD);
    
        if (!$persona) {
            // Persona no encontrada, puedes redirigir o manejar el error según sea necesario
            return redirect('personas')->with('error', 'Persona no encontrada');
        }
    
        // Elimina las relaciones
        $personas->BENEFICIARIOS()->delete();
        $personas->DIRECCION()->delete();
        $personas->AFILIADOS()->delete();
        $personas->USUARIOS()->delete();
    
        // Elimina la persona principal
        $personas->delete();
    
        // Puedes redirigir a una página específica después de la eliminación
        return redirect('personas')->with('success', 'Persona y sus relaciones eliminadas exitosamente');
    }
    


}