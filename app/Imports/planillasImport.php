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
       $fechaPago = Carbon::createFromTimestamp(($row[2] - 25569) * 86400);

// Convertir la fecha de registro a la fecha y hora actuales
$fechaRegistro = Carbon::today();

                return new Planillas([
                    'COD_PLANILLA'    => $row[0],
                    'COD_AFILIADO'    => $row[1],
                     'FEC_PAGO'       => $fechaPago,
                    'DENOMINACION'    => $row[3],
                    'VAL_PAGADO'      => $row[4],
                    'VAL_APO_MENSUAL' => $row[5],
                    'USR_REGISTRO'    => $row[6],
                    'FEC_REGISTRO'    => $fechaRegistro, 
                ]);
            }
        
            
                
        return null; // Si los datos están vacíos, no insertar en la base de datos
        }
    }