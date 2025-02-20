<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\ImportSueldo;
use Illuminate\Support\Facades\Log;

class CsvImportController extends Controller
{
    // Función para mostrar el formulario de carga de archivo
    public function showForm()
    {
        return view('import');
    }

    // Función para manejar la carga e importación del CSV
    public function import(Request $request)
    {
        set_time_limit(300); // Aumentar tiempo de ejecución para archivos grandes

        // Validar que se ha subido un archivo
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        // Cargar el archivo CSV y especificar que el delimitador es "|"
        $csv = Reader::createFromPath($request->file('file')->getRealPath(), 'r');
        $csv->setDelimiter('|'); // Establecer el delimitador en "|"

        // Eliminar el uso de setHeaderOffset, ya que puede no ser necesario
        // Si el archivo tiene encabezados, puedes usar setHeaderOffset(0) o no usarlo
        // $csv->setHeaderOffset(0); // Establecer la primera fila como encabezado

        // Obtener todos los registros, evitando limitarse a una sola fila
        $records = $csv->getRecords(); // Devuelve todas las filas

        // Recorrer las filas del CSV
        foreach ($records as $row) {
            // Verificar si la clave "CODINST" existe en la fila antes de usarla
            if (isset($row['CODINST'])) {
                // Verificar si ya existe un registro para este mes y año
                $existingRecord = ImportSueldo::where('MES', $row['MES'])
                                             ->where('ANHO', $row['ANHO'])
                                             ->first();

                if ($existingRecord) {
                    // Si el registro ya existe, puedes decidir qué hacer:
                    // Ejemplo: Si quieres reemplazar el registro, utiliza el siguiente código:

                    $existingRecord->update([
                        'CODINST' => $row['CODINST'],
                        'CODRUBRO' => $row['CODRUBRO'],
                        'ACTIVIDAD' => $row['ACTIVIDAD'],
                        'TIPOEP' => $row['TIPOEP'],
                        'PROGRAMA' => $row['PROGRAMA'],
                        'SUBPROG' => $row['SUBPROG'],
                        'OBJETO' => $row['OBJETO'],
                        'FUENFINAN' => $row['FUENFINAN'],
                        'ORGFIN' => $row['ORGFIN'],
                        'PLANILLA' => $row['PLANILLA'],
                        'TRANSBCO' => $row['TRANSBCO'],
                        'LINEA' => $row['LINEA'],
                        'INTERL' => $row['INTERL'],
                        'CODAREA' => $row['CODAREA'],
                        'DESCAREA' => $row['DESCAREA'],
                        'CODPUESTO' => $row['CODPUESTO'],
                        'DESCPUESTO' => $row['DESCPUESTO'],
                        'NUMDOC' => $row['NUMDOC'],
                        'NOMBRE' => $row['NOMBRE'],
                        'APELLIDO' => $row['APELLIDO'],
                        'CODCAT' => $row['CODCAT'],
                        'HORASCAT' => $row['HORASCAT'],
                        'MONPRESUP' => $row['MONPRESUP'],
                        'MONDEVENG' => $row['MONDEVENG'],
                        'MONLIQUIDO' => $row['MONLIQUIDO'],
                        'MONCHEQUE' => $row['MONCHEQUE'],
                        'JUBNORMAL' => $row['JUBNORMAL'],
                        'JUBNOMBRA' => $row['JUBNOMBRA'],
                        'JUBASCENSO' => $row['JUBASCENSO'],
                        'JUBVACANCI' => $row['JUBVACANCI'],
                        'JUBPERMISO' => $row['JUBPERMISO'],
                        'JUBDESCMUL' => $row['JUBDESCMUL'],
                        'JUBDESCPER' => $row['JUBDESCPER'],
                        'JUBLEY557' => $row['JUBLEY557'],
                        'MONTOIPS' => $row['MONTOIPS'],
                        'TIP_PUESTO' => $row['TIP_PUESTO'],
                        'SEXO' => $row['SEXO'],
                        'TURNO' => $row['TURNO'],
                        'MONMULTAS' => $row['MONMULTAS'],
                        'ESTCARGO' => $row['ESTCARGO'],
                        'NUMOBLIG' => $row['NUMOBLIG'],
                        'STRNO' => $row['STRNO'],
                        'NRO_OP' => $row['NRO_OP'],
                        'DESC_OP' => $row['DESC_OP'],
                    ]);
                    // Opcional: Registrar que se reemplazó el registro
                    Log::info('Registro actualizado para ' . $row['MES'] . ' ' . $row['ANHO']);
                } else {
                    // Si el registro no existe, crear un nuevo registro
                    ImportSueldo::create([
                        'CODINST' => $row['CODINST'],
                        'CODRUBRO' => $row['CODRUBRO'],
                        'MES' => $row['MES'],
                        'ANHO' => $row['ANHO'],
                        'ACTIVIDAD' => $row['ACTIVIDAD'],
                        'TIPOEP' => $row['TIPOEP'],
                        'PROGRAMA' => $row['PROGRAMA'],
                        'SUBPROG' => $row['SUBPROG'],
                        'OBJETO' => $row['OBJETO'],
                        'FUENFINAN' => $row['FUENFINAN'],
                        'ORGFIN' => $row['ORGFIN'],
                        'PLANILLA' => $row['PLANILLA'],
                        'TRANSBCO' => $row['TRANSBCO'],
                        'LINEA' => $row['LINEA'],
                        'INTERL' => $row['INTERL'],
                        'CODAREA' => $row['CODAREA'],
                        'DESCAREA' => $row['DESCAREA'],
                        'CODPUESTO' => $row['CODPUESTO'],
                        'DESCPUESTO' => $row['DESCPUESTO'],
                        'NUMDOC' => $row['NUMDOC'],
                        'NOMBRE' => $row['NOMBRE'],
                        'APELLIDO' => $row['APELLIDO'],
                        'CODCAT' => $row['CODCAT'],
                        'HORASCAT' => $row['HORASCAT'],
                        'MONPRESUP' => $row['MONPRESUP'],
                        'MONDEVENG' => $row['MONDEVENG'],
                        'MONLIQUIDO' => $row['MONLIQUIDO'],
                        'MONCHEQUE' => $row['MONCHEQUE'],
                        'JUBNORMAL' => $row['JUBNORMAL'],
                        'JUBNOMBRA' => $row['JUBNOMBRA'],
                        'JUBASCENSO' => $row['JUBASCENSO'],
                        'JUBVACANCI' => $row['JUBVACANCI'],
                        'JUBPERMISO' => $row['JUBPERMISO'],
                        'JUBDESCMUL' => $row['JUBDESCMUL'],
                        'JUBDESCPER' => $row['JUBDESCPER'],
                        'JUBLEY557' => $row['JUBLEY557'],
                        'MONTOIPS' => $row['MONTOIPS'],
                        'TIP_PUESTO' => $row['TIP_PUESTO'],
                        'SEXO' => $row['SEXO'],
                        'TURNO' => $row['TURNO'],
                        'MONMULTAS' => $row['MONMULTAS'],
                        'ESTCARGO' => $row['ESTCARGO'],
                        'NUMOBLIG' => $row['NUMOBLIG'],
                        'STRNO' => $row['STRNO'],
                        'NRO_OP' => $row['NRO_OP'],
                        'DESC_OP' => $row['DESC_OP'],
                    ]);
                    Log::info('Nuevo registro creado para ' . $row['MES'] . ' ' . $row['ANHO']);
                }
            } else {
                // Si falta el campo 'CODINST', puedes manejarlo de alguna forma, por ejemplo, registrando un error.
                Log::warning('Fila sin CODINST: ' . json_encode($row));
            }
        }

        return redirect()->back()->with('success', 'Archivo CSV importado exitosamente');
    }
}
