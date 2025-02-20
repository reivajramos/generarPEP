<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportSueldo extends Model
{
    use HasFactory;

    // Asegúrate de especificar la tabla si no es el plural del nombre del modelo
    protected $table = 'import_sueldos';

    // Habilitar la asignación masiva para estos campos
    protected $fillable = [
        'CODINST',
        'CODRUBRO',
        'MES',
        'ANHO',
        'ACTIVIDAD',
        'TIPOEP',
        'PROGRAMA',
        'SUBPROG',
        'OBJETO',
        'FUENFINAN',
        'ORGFIN',
        'PLANILLA',
        'TRANSBCO',
        'LINEA',
        'INTERL',
        'CODAREA',
        'DESCAREA',
        'CODPUESTO',
        'DESCPUESTO',
        'NUMDOC',
        'NOMBRE',
        'APELLIDO',
        'CODCAT',
        'HORASCAT',
        'MONPRESUP',
        'MONDEVENG',
        'MONLIQUIDO',
        'MONCHEQUE',
        'JUBNORMAL',
        'JUBNOMBRA',
        'JUBASCENSO',
        'JUBVACANCI',
        'JUBPERMISO',
        'JUBDESCMUL',
        'JUBDESCPER',
        'JUBLEY557',
        'MONTOIPS',
        'TIP_PUESTO',
        'SEXO',
        'TURNO',
        'MONMULTAS',
        'ESTCARGO',
        'NUMOBLIG',
        'STRNO',
        'NRO_OP',
        'DESC_OP',
    ];

    // Si no estás usando las marcas de tiempo (created_at y updated_at), puedes deshabilitarlas
    public $timestamps = true;
}
