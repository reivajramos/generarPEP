<?php

namespace App\Http\Controllers;

use App\Models\ImportSueldo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ImportSueldoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ImportSueldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $importSueldos = ImportSueldo::paginate();

        //calculo para docentes
        $jubilaciones_doc = ImportSueldo::where('SUBPROG', '99')->where('TRANSBCO', 'S')->sum('JUBNORMAL', 'JUBNOMBRA', 'JUBASCENSO', 'JUBDESCMUL' ,'JUBLEY557');
        $descuentos_doc = ImportSueldo::where('SUBPROG', '99')->where('TRANSBCO', 'S')->selectRaw('SUM(MONLIQUIDO) - SUM(MONCHEQUE) as descuento')->value('descuento');
        $descuentos_doc_varios = ImportSueldo::where('SUBPROG', '99')->where('TRANSBCO', 'S')->selectRaw('SUM(MONLIQUIDO) - SUM(MONCHEQUE) + SUM(MONTOIPS) as descuento_varios')->value('descuento_varios');
        $PEP_doc = ImportSueldo::where('SUBPROG', '99')->where('TRANSBCO', 'S')->selectRaw('SUM(MONDEVENG) - SUM(MONTOIPS) as PEPdoc')->value('PEPdoc') - $descuentos_doc;

        $Docentes_totales = [$jubilaciones_doc, $descuentos_doc, $descuentos_doc_varios, $PEP_doc] ;

        //calculo para administrativos
        $jubilaciones_adm = ImportSueldo::where('SUBPROG', '00')->where('TRANSBCO', 'S')->sum('JUBNORMAL', 'JUBNOMBRA', 'JUBASCENSO', 'JUBDESCMUL' ,'JUBLEY557');
        $descuentos_adm = ImportSueldo::where('SUBPROG', '00')->where('TRANSBCO', 'S')->selectRaw('SUM(MONLIQUIDO) - SUM(MONCHEQUE) as descuento')->value('descuento');
        $descuentos_adm_varios = ImportSueldo::where('SUBPROG', '00')->where('TRANSBCO', 'S')->selectRaw('SUM(MONLIQUIDO) - SUM(MONCHEQUE) + SUM(MONTOIPS) as descuento_varios')->value('descuento_varios');
        $PEP_adm = ImportSueldo::where('SUBPROG', '00')->where('TRANSBCO', 'S')->selectRaw('SUM(MONDEVENG) - SUM(MONTOIPS) as PEPadm')->value('PEPadm') - $descuentos_adm;
        $ips = ImportSueldo::where('NUMDOC', '1196017')
            ->select('NOMBRE')
            ->get();

        $febrero_adm = 384604512;

       // dd($ips);
        $Docentes_totales = [$jubilaciones_doc, $descuentos_doc, $descuentos_doc_varios, $PEP_doc] ;
        $Administrativos_totales = [$jubilaciones_adm, $descuentos_adm, $descuentos_adm_varios, $PEP_adm] ;


        

        $MONPRESUP = ImportSueldo::sum('MONPRESUP');
        $MONLIQUIDO = ImportSueldo::sum('MONLIQUIDO');
        $JUBVACANCI = ImportSueldo::sum('JUBVACANCI');

        $DOCENTE_MONPRESUP = ImportSueldo::where('SUBPROG', '99')->sum('MONLIQUIDO');
        $DOCENTE_VACANCIA = ImportSueldo::where('SUBPROG', '99')->sum('JUBVACANCI');
        $PEP_DOCENTE = $DOCENTE_MONPRESUP - $DOCENTE_VACANCIA;

       // dd($PEP_DOCENTE, $diferencia, $importSueldos);

        //dd($PEP_DOCENTE , $DOCENTE_VACANCIA, $DOCENTE_MONPRESUP, $MONPRESUP, $MONLIQUIDO, $JUBVACANCI, $importSueldos);

        return view('import-sueldo.index', compact('importSueldos'))
            ->with('i', ($request->input('page', 1) - 1) * $importSueldos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $importSueldo = new ImportSueldo();

        return view('import-sueldo.create', compact('importSueldo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImportSueldoRequest $request): RedirectResponse
    {
        ImportSueldo::create($request->validated());

        return Redirect::route('import-sueldos.index')
            ->with('success', 'ImportSueldo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $importSueldo = ImportSueldo::find($id);

        return view('import-sueldo.show', compact('importSueldo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $importSueldo = ImportSueldo::find($id);

        return view('import-sueldo.edit', compact('importSueldo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImportSueldoRequest $request, ImportSueldo $importSueldo): RedirectResponse
    {
        $importSueldo->update($request->validated());

        return Redirect::route('import-sueldos.index')
            ->with('success', 'ImportSueldo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ImportSueldo::find($id)->delete();

        return Redirect::route('import-sueldos.index')
            ->with('success', 'ImportSueldo deleted successfully');
    }
}
