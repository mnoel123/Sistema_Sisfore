<?php

namespace App\Imports;
use Carbon\Carbon;
use App\Models\planillas;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;
class planillasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {        // Validar que haya datos antes de insertar
    
        if (!empty($row[0])) {

       // Get the Excel cell object for the date
       $cell = $row[2];

       // Convert the Excel serial number to a date
       $fechaPago = Carbon::createFromTimestamp(($row[4] - 25569) * 86400);

// Convertir la fecha de registro a la fecha y hora actuales
$fechaRegistro = Carbon::today();

                return new Planillas([
                    'COD_PLANILLA'    => (int)$row[0], // Convertir a entero
                    'COD_AFILIADO'    => $row[1],
                    'NUM_AFILIADO'    => $row[2],
                    'NOM_COMPLETO'    => $row[3],
                    'FEC_PAGO'       => $fechaPago,
                    'DENOMINACION'    => $row[5],
                    'VAL_PAGADO'      => $row[6],
                    'VAL_APO_MENSUAL' => $row[7],
                    'USR_REGISTRO'    => $row[8],
                    'FEC_REGISTRO'    => $fechaRegistro, 
                ]);
            }
        
            
                
        return null; // Si los datos están vacíos, no insertar en la base de datos
        }
    }