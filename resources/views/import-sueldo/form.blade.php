<div class="space-y-6">
    
    <div>
        <x-input-label for="c_o_d_i_n_s_t" :value="__('Codinst')"/>
        <x-text-input id="c_o_d_i_n_s_t" name="CODINST" type="text" class="mt-1 block w-full" :value="old('CODINST', $importSueldo?->CODINST)" autocomplete="CODINST" placeholder="Codinst"/>
        <x-input-error class="mt-2" :messages="$errors->get('CODINST')"/>
    </div>
    <div>
        <x-input-label for="c_o_d_r_u_b_r_o" :value="__('Codrubro')"/>
        <x-text-input id="c_o_d_r_u_b_r_o" name="CODRUBRO" type="text" class="mt-1 block w-full" :value="old('CODRUBRO', $importSueldo?->CODRUBRO)" autocomplete="CODRUBRO" placeholder="Codrubro"/>
        <x-input-error class="mt-2" :messages="$errors->get('CODRUBRO')"/>
    </div>
    <div>
        <x-input-label for="m_e_s" :value="__('Mes')"/>
        <x-text-input id="m_e_s" name="MES" type="text" class="mt-1 block w-full" :value="old('MES', $importSueldo?->MES)" autocomplete="MES" placeholder="Mes"/>
        <x-input-error class="mt-2" :messages="$errors->get('MES')"/>
    </div>
    <div>
        <x-input-label for="a_n_h_o" :value="__('Anho')"/>
        <x-text-input id="a_n_h_o" name="ANHO" type="text" class="mt-1 block w-full" :value="old('ANHO', $importSueldo?->ANHO)" autocomplete="ANHO" placeholder="Anho"/>
        <x-input-error class="mt-2" :messages="$errors->get('ANHO')"/>
    </div>
    <div>
        <x-input-label for="a_c_t_i_v_i_d_a_d" :value="__('Actividad')"/>
        <x-text-input id="a_c_t_i_v_i_d_a_d" name="ACTIVIDAD" type="text" class="mt-1 block w-full" :value="old('ACTIVIDAD', $importSueldo?->ACTIVIDAD)" autocomplete="ACTIVIDAD" placeholder="Actividad"/>
        <x-input-error class="mt-2" :messages="$errors->get('ACTIVIDAD')"/>
    </div>
    <div>
        <x-input-label for="t_i_p_o_e_p" :value="__('Tipoep')"/>
        <x-text-input id="t_i_p_o_e_p" name="TIPOEP" type="text" class="mt-1 block w-full" :value="old('TIPOEP', $importSueldo?->TIPOEP)" autocomplete="TIPOEP" placeholder="Tipoep"/>
        <x-input-error class="mt-2" :messages="$errors->get('TIPOEP')"/>
    </div>
    <div>
        <x-input-label for="p_r_o_g_r_a_m_a" :value="__('Programa')"/>
        <x-text-input id="p_r_o_g_r_a_m_a" name="PROGRAMA" type="text" class="mt-1 block w-full" :value="old('PROGRAMA', $importSueldo?->PROGRAMA)" autocomplete="PROGRAMA" placeholder="Programa"/>
        <x-input-error class="mt-2" :messages="$errors->get('PROGRAMA')"/>
    </div>
    <div>
        <x-input-label for="s_u_b_p_r_o_g" :value="__('Subprog')"/>
        <x-text-input id="s_u_b_p_r_o_g" name="SUBPROG" type="text" class="mt-1 block w-full" :value="old('SUBPROG', $importSueldo?->SUBPROG)" autocomplete="SUBPROG" placeholder="Subprog"/>
        <x-input-error class="mt-2" :messages="$errors->get('SUBPROG')"/>
    </div>
    <div>
        <x-input-label for="o_b_j_e_t_o" :value="__('Objeto')"/>
        <x-text-input id="o_b_j_e_t_o" name="OBJETO" type="text" class="mt-1 block w-full" :value="old('OBJETO', $importSueldo?->OBJETO)" autocomplete="OBJETO" placeholder="Objeto"/>
        <x-input-error class="mt-2" :messages="$errors->get('OBJETO')"/>
    </div>
    <div>
        <x-input-label for="f_u_e_n_f_i_n_a_n" :value="__('Fuenfinan')"/>
        <x-text-input id="f_u_e_n_f_i_n_a_n" name="FUENFINAN" type="text" class="mt-1 block w-full" :value="old('FUENFINAN', $importSueldo?->FUENFINAN)" autocomplete="FUENFINAN" placeholder="Fuenfinan"/>
        <x-input-error class="mt-2" :messages="$errors->get('FUENFINAN')"/>
    </div>
    <div>
        <x-input-label for="o_r_g_f_i_n" :value="__('Orgfin')"/>
        <x-text-input id="o_r_g_f_i_n" name="ORGFIN" type="text" class="mt-1 block w-full" :value="old('ORGFIN', $importSueldo?->ORGFIN)" autocomplete="ORGFIN" placeholder="Orgfin"/>
        <x-input-error class="mt-2" :messages="$errors->get('ORGFIN')"/>
    </div>
    <div>
        <x-input-label for="p_l_a_n_i_l_l_a" :value="__('Planilla')"/>
        <x-text-input id="p_l_a_n_i_l_l_a" name="PLANILLA" type="text" class="mt-1 block w-full" :value="old('PLANILLA', $importSueldo?->PLANILLA)" autocomplete="PLANILLA" placeholder="Planilla"/>
        <x-input-error class="mt-2" :messages="$errors->get('PLANILLA')"/>
    </div>
    <div>
        <x-input-label for="t_r_a_n_s_b_c_o" :value="__('Transbco')"/>
        <x-text-input id="t_r_a_n_s_b_c_o" name="TRANSBCO" type="text" class="mt-1 block w-full" :value="old('TRANSBCO', $importSueldo?->TRANSBCO)" autocomplete="TRANSBCO" placeholder="Transbco"/>
        <x-input-error class="mt-2" :messages="$errors->get('TRANSBCO')"/>
    </div>
    <div>
        <x-input-label for="l_i_n_e_a" :value="__('Linea')"/>
        <x-text-input id="l_i_n_e_a" name="LINEA" type="text" class="mt-1 block w-full" :value="old('LINEA', $importSueldo?->LINEA)" autocomplete="LINEA" placeholder="Linea"/>
        <x-input-error class="mt-2" :messages="$errors->get('LINEA')"/>
    </div>
    <div>
        <x-input-label for="i_n_t_e_r_l" :value="__('Interl')"/>
        <x-text-input id="i_n_t_e_r_l" name="INTERL" type="text" class="mt-1 block w-full" :value="old('INTERL', $importSueldo?->INTERL)" autocomplete="INTERL" placeholder="Interl"/>
        <x-input-error class="mt-2" :messages="$errors->get('INTERL')"/>
    </div>
    <div>
        <x-input-label for="c_o_d_a_r_e_a" :value="__('Codarea')"/>
        <x-text-input id="c_o_d_a_r_e_a" name="CODAREA" type="text" class="mt-1 block w-full" :value="old('CODAREA', $importSueldo?->CODAREA)" autocomplete="CODAREA" placeholder="Codarea"/>
        <x-input-error class="mt-2" :messages="$errors->get('CODAREA')"/>
    </div>
    <div>
        <x-input-label for="d_e_s_c_a_r_e_a" :value="__('Descarea')"/>
        <x-text-input id="d_e_s_c_a_r_e_a" name="DESCAREA" type="text" class="mt-1 block w-full" :value="old('DESCAREA', $importSueldo?->DESCAREA)" autocomplete="DESCAREA" placeholder="Descarea"/>
        <x-input-error class="mt-2" :messages="$errors->get('DESCAREA')"/>
    </div>
    <div>
        <x-input-label for="c_o_d_p_u_e_s_t_o" :value="__('Codpuesto')"/>
        <x-text-input id="c_o_d_p_u_e_s_t_o" name="CODPUESTO" type="text" class="mt-1 block w-full" :value="old('CODPUESTO', $importSueldo?->CODPUESTO)" autocomplete="CODPUESTO" placeholder="Codpuesto"/>
        <x-input-error class="mt-2" :messages="$errors->get('CODPUESTO')"/>
    </div>
    <div>
        <x-input-label for="d_e_s_c_p_u_e_s_t_o" :value="__('Descpuesto')"/>
        <x-text-input id="d_e_s_c_p_u_e_s_t_o" name="DESCPUESTO" type="text" class="mt-1 block w-full" :value="old('DESCPUESTO', $importSueldo?->DESCPUESTO)" autocomplete="DESCPUESTO" placeholder="Descpuesto"/>
        <x-input-error class="mt-2" :messages="$errors->get('DESCPUESTO')"/>
    </div>
    <div>
        <x-input-label for="n_u_m_d_o_c" :value="__('Numdoc')"/>
        <x-text-input id="n_u_m_d_o_c" name="NUMDOC" type="text" class="mt-1 block w-full" :value="old('NUMDOC', $importSueldo?->NUMDOC)" autocomplete="NUMDOC" placeholder="Numdoc"/>
        <x-input-error class="mt-2" :messages="$errors->get('NUMDOC')"/>
    </div>
    <div>
        <x-input-label for="n_o_m_b_r_e" :value="__('Nombre')"/>
        <x-text-input id="n_o_m_b_r_e" name="NOMBRE" type="text" class="mt-1 block w-full" :value="old('NOMBRE', $importSueldo?->NOMBRE)" autocomplete="NOMBRE" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('NOMBRE')"/>
    </div>
    <div>
        <x-input-label for="a_p_e_l_l_i_d_o" :value="__('Apellido')"/>
        <x-text-input id="a_p_e_l_l_i_d_o" name="APELLIDO" type="text" class="mt-1 block w-full" :value="old('APELLIDO', $importSueldo?->APELLIDO)" autocomplete="APELLIDO" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('APELLIDO')"/>
    </div>
    <div>
        <x-input-label for="c_o_d_c_a_t" :value="__('Codcat')"/>
        <x-text-input id="c_o_d_c_a_t" name="CODCAT" type="text" class="mt-1 block w-full" :value="old('CODCAT', $importSueldo?->CODCAT)" autocomplete="CODCAT" placeholder="Codcat"/>
        <x-input-error class="mt-2" :messages="$errors->get('CODCAT')"/>
    </div>
    <div>
        <x-input-label for="h_o_r_a_s_c_a_t" :value="__('Horascat')"/>
        <x-text-input id="h_o_r_a_s_c_a_t" name="HORASCAT" type="text" class="mt-1 block w-full" :value="old('HORASCAT', $importSueldo?->HORASCAT)" autocomplete="HORASCAT" placeholder="Horascat"/>
        <x-input-error class="mt-2" :messages="$errors->get('HORASCAT')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_p_r_e_s_u_p" :value="__('Monpresup')"/>
        <x-text-input id="m_o_n_p_r_e_s_u_p" name="MONPRESUP" type="text" class="mt-1 block w-full" :value="old('MONPRESUP', $importSueldo?->MONPRESUP)" autocomplete="MONPRESUP" placeholder="Monpresup"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONPRESUP')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_d_e_v_e_n_g" :value="__('Mondeveng')"/>
        <x-text-input id="m_o_n_d_e_v_e_n_g" name="MONDEVENG" type="text" class="mt-1 block w-full" :value="old('MONDEVENG', $importSueldo?->MONDEVENG)" autocomplete="MONDEVENG" placeholder="Mondeveng"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONDEVENG')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_l_i_q_u_i_d_o" :value="__('Monliquido')"/>
        <x-text-input id="m_o_n_l_i_q_u_i_d_o" name="MONLIQUIDO" type="text" class="mt-1 block w-full" :value="old('MONLIQUIDO', $importSueldo?->MONLIQUIDO)" autocomplete="MONLIQUIDO" placeholder="Monliquido"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONLIQUIDO')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_c_h_e_q_u_e" :value="__('Moncheque')"/>
        <x-text-input id="m_o_n_c_h_e_q_u_e" name="MONCHEQUE" type="text" class="mt-1 block w-full" :value="old('MONCHEQUE', $importSueldo?->MONCHEQUE)" autocomplete="MONCHEQUE" placeholder="Moncheque"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONCHEQUE')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_n_o_r_m_a_l" :value="__('Jubnormal')"/>
        <x-text-input id="j_u_b_n_o_r_m_a_l" name="JUBNORMAL" type="text" class="mt-1 block w-full" :value="old('JUBNORMAL', $importSueldo?->JUBNORMAL)" autocomplete="JUBNORMAL" placeholder="Jubnormal"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBNORMAL')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_n_o_m_b_r_a" :value="__('Jubnombra')"/>
        <x-text-input id="j_u_b_n_o_m_b_r_a" name="JUBNOMBRA" type="text" class="mt-1 block w-full" :value="old('JUBNOMBRA', $importSueldo?->JUBNOMBRA)" autocomplete="JUBNOMBRA" placeholder="Jubnombra"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBNOMBRA')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_a_s_c_e_n_s_o" :value="__('Jubascenso')"/>
        <x-text-input id="j_u_b_a_s_c_e_n_s_o" name="JUBASCENSO" type="text" class="mt-1 block w-full" :value="old('JUBASCENSO', $importSueldo?->JUBASCENSO)" autocomplete="JUBASCENSO" placeholder="Jubascenso"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBASCENSO')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_v_a_c_a_n_c_i" :value="__('Jubvacanci')"/>
        <x-text-input id="j_u_b_v_a_c_a_n_c_i" name="JUBVACANCI" type="text" class="mt-1 block w-full" :value="old('JUBVACANCI', $importSueldo?->JUBVACANCI)" autocomplete="JUBVACANCI" placeholder="Jubvacanci"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBVACANCI')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_p_e_r_m_i_s_o" :value="__('Jubpermiso')"/>
        <x-text-input id="j_u_b_p_e_r_m_i_s_o" name="JUBPERMISO" type="text" class="mt-1 block w-full" :value="old('JUBPERMISO', $importSueldo?->JUBPERMISO)" autocomplete="JUBPERMISO" placeholder="Jubpermiso"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBPERMISO')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_d_e_s_c_m_u_l" :value="__('Jubdescmul')"/>
        <x-text-input id="j_u_b_d_e_s_c_m_u_l" name="JUBDESCMUL" type="text" class="mt-1 block w-full" :value="old('JUBDESCMUL', $importSueldo?->JUBDESCMUL)" autocomplete="JUBDESCMUL" placeholder="Jubdescmul"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBDESCMUL')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_d_e_s_c_p_e_r" :value="__('Jubdescper')"/>
        <x-text-input id="j_u_b_d_e_s_c_p_e_r" name="JUBDESCPER" type="text" class="mt-1 block w-full" :value="old('JUBDESCPER', $importSueldo?->JUBDESCPER)" autocomplete="JUBDESCPER" placeholder="Jubdescper"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBDESCPER')"/>
    </div>
    <div>
        <x-input-label for="j_u_b_l_e_y557" :value="__('Jubley557')"/>
        <x-text-input id="j_u_b_l_e_y557" name="JUBLEY557" type="text" class="mt-1 block w-full" :value="old('JUBLEY557', $importSueldo?->JUBLEY557)" autocomplete="JUBLEY557" placeholder="Jubley557"/>
        <x-input-error class="mt-2" :messages="$errors->get('JUBLEY557')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_t_o_i_p_s" :value="__('Montoips')"/>
        <x-text-input id="m_o_n_t_o_i_p_s" name="MONTOIPS" type="text" class="mt-1 block w-full" :value="old('MONTOIPS', $importSueldo?->MONTOIPS)" autocomplete="MONTOIPS" placeholder="Montoips"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONTOIPS')"/>
    </div>
    <div>
        <x-input-label for="t_i_p__p_u_e_s_t_o" :value="__('Tip Puesto')"/>
        <x-text-input id="t_i_p__p_u_e_s_t_o" name="TIP_PUESTO" type="text" class="mt-1 block w-full" :value="old('TIP_PUESTO', $importSueldo?->TIP_PUESTO)" autocomplete="TIP_PUESTO" placeholder="Tip Puesto"/>
        <x-input-error class="mt-2" :messages="$errors->get('TIP_PUESTO')"/>
    </div>
    <div>
        <x-input-label for="s_e_x_o" :value="__('Sexo')"/>
        <x-text-input id="s_e_x_o" name="SEXO" type="text" class="mt-1 block w-full" :value="old('SEXO', $importSueldo?->SEXO)" autocomplete="SEXO" placeholder="Sexo"/>
        <x-input-error class="mt-2" :messages="$errors->get('SEXO')"/>
    </div>
    <div>
        <x-input-label for="t_u_r_n_o" :value="__('Turno')"/>
        <x-text-input id="t_u_r_n_o" name="TURNO" type="text" class="mt-1 block w-full" :value="old('TURNO', $importSueldo?->TURNO)" autocomplete="TURNO" placeholder="Turno"/>
        <x-input-error class="mt-2" :messages="$errors->get('TURNO')"/>
    </div>
    <div>
        <x-input-label for="m_o_n_m_u_l_t_a_s" :value="__('Monmultas')"/>
        <x-text-input id="m_o_n_m_u_l_t_a_s" name="MONMULTAS" type="text" class="mt-1 block w-full" :value="old('MONMULTAS', $importSueldo?->MONMULTAS)" autocomplete="MONMULTAS" placeholder="Monmultas"/>
        <x-input-error class="mt-2" :messages="$errors->get('MONMULTAS')"/>
    </div>
    <div>
        <x-input-label for="e_s_t_c_a_r_g_o" :value="__('Estcargo')"/>
        <x-text-input id="e_s_t_c_a_r_g_o" name="ESTCARGO" type="text" class="mt-1 block w-full" :value="old('ESTCARGO', $importSueldo?->ESTCARGO)" autocomplete="ESTCARGO" placeholder="Estcargo"/>
        <x-input-error class="mt-2" :messages="$errors->get('ESTCARGO')"/>
    </div>
    <div>
        <x-input-label for="n_u_m_o_b_l_i_g" :value="__('Numoblig')"/>
        <x-text-input id="n_u_m_o_b_l_i_g" name="NUMOBLIG" type="text" class="mt-1 block w-full" :value="old('NUMOBLIG', $importSueldo?->NUMOBLIG)" autocomplete="NUMOBLIG" placeholder="Numoblig"/>
        <x-input-error class="mt-2" :messages="$errors->get('NUMOBLIG')"/>
    </div>
    <div>
        <x-input-label for="s_t_r_n_o" :value="__('Strno')"/>
        <x-text-input id="s_t_r_n_o" name="STRNO" type="text" class="mt-1 block w-full" :value="old('STRNO', $importSueldo?->STRNO)" autocomplete="STRNO" placeholder="Strno"/>
        <x-input-error class="mt-2" :messages="$errors->get('STRNO')"/>
    </div>
    <div>
        <x-input-label for="n_r_o__o_p" :value="__('Nro Op')"/>
        <x-text-input id="n_r_o__o_p" name="NRO_OP" type="text" class="mt-1 block w-full" :value="old('NRO_OP', $importSueldo?->NRO_OP)" autocomplete="NRO_OP" placeholder="Nro Op"/>
        <x-input-error class="mt-2" :messages="$errors->get('NRO_OP')"/>
    </div>
    <div>
        <x-input-label for="d_e_s_c__o_p" :value="__('Desc Op')"/>
        <x-text-input id="d_e_s_c__o_p" name="DESC_OP" type="text" class="mt-1 block w-full" :value="old('DESC_OP', $importSueldo?->DESC_OP)" autocomplete="DESC_OP" placeholder="Desc Op"/>
        <x-input-error class="mt-2" :messages="$errors->get('DESC_OP')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>