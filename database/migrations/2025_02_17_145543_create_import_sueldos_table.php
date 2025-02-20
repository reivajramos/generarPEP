<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('import_sueldos', function (Blueprint $table) {
        $table->id();
        $table->string('CODINST');
        $table->string('CODRUBRO');
        $table->string('MES');
        $table->string('ANHO');
        $table->string('ACTIVIDAD');
        $table->string('TIPOEP');
        $table->string('PROGRAMA');
        $table->string('SUBPROG');
        $table->string('OBJETO');
        $table->string('FUENFINAN');
        $table->string('ORGFIN');
        $table->string('PLANILLA');
        $table->string('TRANSBCO');
        $table->string('LINEA');
        $table->string('INTERL');
        $table->string('CODAREA');
        $table->string('DESCAREA');
        $table->string('CODPUESTO');
        $table->string('DESCPUESTO');
        $table->string('NUMDOC');
        $table->string('NOMBRE');
        $table->string('APELLIDO');
        $table->string('CODCAT');
        $table->string('HORASCAT');
        $table->string('MONPRESUP');
        $table->string('MONDEVENG');
        $table->string('MONLIQUIDO');
        $table->string('MONCHEQUE');
        $table->string('JUBNORMAL');
        $table->string('JUBNOMBRA');
        $table->string('JUBASCENSO');
        $table->string('JUBVACANCI');
        $table->string('JUBPERMISO');
        $table->string('JUBDESCMUL');
        $table->string('JUBDESCPER');
        $table->string('JUBLEY557');
        $table->string('MONTOIPS');
        $table->string('TIP_PUESTO');
        $table->string('SEXO');
        $table->string('TURNO');
        $table->string('MONMULTAS');
        $table->string('ESTCARGO');
        $table->string('NUMOBLIG');
        $table->string('STRNO');
        $table->string('NRO_OP');
        $table->string('DESC_OP');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('import_sueldos');
    }
};
