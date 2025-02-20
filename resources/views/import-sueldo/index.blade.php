<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Import Sueldos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Import Sueldos') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Import Sueldos') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('import-sueldos.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>
					<div class="sm:flex sm:items-center">
						<div class="sm:flex-auto">
							hola
						</div>

					</div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                        
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Codinst</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Codrubro</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Mes</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Anho</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Actividad</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Tipoep</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Programa</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Subprog</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Objeto</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fuenfinan</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Orgfin</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Planilla</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Transbco</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Linea</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Interl</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Codarea</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Descarea</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Codpuesto</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Descpuesto</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Numdoc</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Apellido</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Codcat</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Horascat</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Monpresup</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Mondeveng</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Monliquido</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Moncheque</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubnormal</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubnombra</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubascenso</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubvacanci</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubpermiso</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubdescmul</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubdescper</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Jubley557</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Montoips</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Tip Puesto</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sexo</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Turno</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Monmultas</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Estcargo</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Numoblig</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Strno</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nro Op</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Desc Op</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($importSueldos as $importSueldo)
                                        <tr class="even:bg-gray-50">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>
                                            
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->CODINST }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->CODRUBRO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MES }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->ANHO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->ACTIVIDAD }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->TIPOEP }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->PROGRAMA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->SUBPROG }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->OBJETO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->FUENFINAN }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->ORGFIN }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->PLANILLA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->TRANSBCO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->LINEA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->INTERL }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->CODAREA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->DESCAREA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->CODPUESTO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->DESCPUESTO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->NUMDOC }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->NOMBRE }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->APELLIDO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->CODCAT }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->HORASCAT }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONPRESUP }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONDEVENG }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONLIQUIDO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONCHEQUE }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBNORMAL }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBNOMBRA }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBASCENSO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBVACANCI }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBPERMISO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBDESCMUL }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBDESCPER }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->JUBLEY557 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONTOIPS }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->TIP_PUESTO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->SEXO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->TURNO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->MONMULTAS }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->ESTCARGO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->NUMOBLIG }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->STRNO }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->NRO_OP }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $importSueldo->DESC_OP }}</td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('import-sueldos.destroy', $importSueldo->id) }}" method="POST">
                                                    <a href="{{ route('import-sueldos.show', $importSueldo->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                                    <a href="{{ route('import-sueldos.edit', $importSueldo->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('import-sueldos.destroy', $importSueldo->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $importSueldos->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>