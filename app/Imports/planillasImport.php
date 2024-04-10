<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Planillas;
use Maatwebsite\Excel\Concerns\ToModel;

class PlanillasImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Verificar si la fila es el encabezado
        if (strcasecmp(trim($row[0]), 'CODIGO AFILIADO') === 0) {
            return null; // Ignorar la fila del encabezado
        }
    
        // Validar que haya datos antes de insertar
        if (!empty($row[0])) {
            // Validar que el nombre completo solo contenga letras
            if (!preg_match('/^[a-zA-Z ]+$/', $row[2])) {
                // Si el nombre completo no contiene solo letras, regresar null para no insertar en la base de datos
                return null;
            }
    
            // Convertir el valor de fecha de Excel a una fecha de Carbon
            $fechaPago = Carbon::createFromTimestamp(($row[3] - 25569) * 86400);
    
            // Obtener la fecha y hora actuales en el huso horario local y formatearla
            $fechaRegistro = Carbon::now()->toDateTimeString();
    
            return new Planillas([
                'COD_AFILIADO'    => $row[0], // Asumiendo que el código de afiliado está en la primera posición
                'NUM_AFILIADO'    => $row[1],
                'NOM_COMPLETO'    => $row[2],
                'FEC_PAGO'        => $fechaPago->format('d/m/Y'), // Formatear la fecha de pago a d-m-y
                'DENOMINACION'    => $row[4], // No hay conversión de fecha aquí, ya que parece ser un campo diferente
                'VAL_PAGADO'      => $row[5],
                'USR_REGISTRO'    => $row[6],
                'FEC_REGISTRO'    => $fechaRegistro, 
            ]);
        }
        
        return null; // Si los datos están vacíos, no insertar en la base de datos
    }
    
 }
