<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/modernizr.js');
// Formulario: Datos para Caracterización de Muertes Maternas
echo '<div class="row">';
    // Inicio del Menu Principal
    $menu = new Menu();
    $menu->menu_I(); // Imprime el inicio del menu
    $titulo = new Titulo('(VI) Datos para Caracterización de Muertes Maternas','VI. Datos para Caracterización de Muertes Maternas');
    // Inicio del Formulario
    $form = new Formulario('Datos para Caracterización de Muertes Maternas');
    // form_I($method,$action,$name,$onsubmit,$atributo)
    $form->form_I('post','#','formulario','','class="large-12 columns" data-abide="ajax"');
        
        echo '<dl class="tabs vertical" data-tab>';
            echo '<dd class="active"><a href="#panel1">Parte 1</a></dd>';
            echo '<dd><a href="#panel2">Parte 2</a></dd>';
            echo '<dd><a href="#panel3">Parte 3</a></dd>';
            echo '<dd><a href="#panel4">Parte 4</a></dd>';
            echo '<dd><a href="#panel5">Parte 5</a></dd>';
            echo '<dd><a href="#panel6">Parte 6</a></dd>';
            echo '<dd><a href="#panel7">Parte 7</a></dd>';
            echo '<dd><a href="#panel8">Parte 8</a></dd>';
            echo '<dd><a href="#panel9">Parte 9</a></dd>';
            echo '<dd><a href="#panel10">Parte 10</a></dd>';
            echo '<dd><a href="#panel11">Parte 11</a></dd>';
            echo '<dd><a href="#panel12">Parte 12</a></dd>';
            echo '<dd><a href="#panel13">Parte 13</a></dd>';
            echo '<dd><a href="#panel14">Parte 14</a></dd>';
            echo '<dd><a href="#panel15">Parte 15</a></dd>';
        echo'</dl>';
        
        echo '<div class="tabs-content vertical">';
            
            echo '<div class="large-12 columns content active" id="panel1">';
            // Parte 1
            echo '<fieldset><legend>Parte 1 - Datos Básicos</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('clas_mm','Clasificación de Cargo de Muerte Materna','');
                //input($name,$type,$placeholder,$atributo)
                $form->select('clas_mm','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('nro_hh','Nº de Hijos Huérfanos','');
                $form->select('nro_hh','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('edad','Edad','');
                $form->select('edad','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('gr_etnico','Grupo Étnico','');
                $form->select('gr_etnico','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('lvl_educacion','Nivel de Educación','');
                $form->select('lvl_educacion','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('sit_laboral','Situación Laboral','');
                $form->select('sit_laboral','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('cond_pareja','Condición de Pareja','');
                $form->select('cond_pareja','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('disp_ah','Disponibilidad de Atención Hospitalaria','');
                $form->select('disp_ah','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('edo_res','Estado de Residencia','');
                $form->select('edo_res','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('mun_res','Municipio de Residencia','');
                $form->select('mun_res','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            
            echo '<div class="content" id="panel2">';
            // Parte 2
            echo '<fieldset><legend>Parte 2 - Condiciones de Vida</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('hac','Hacinamiento','');
                //input($name,$type,$placeholder,$atributo)
                $form->select('hac','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('agua_intra','Agua Intradomiciliaria','');
                $form->select('agua_intra','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('disp_exc','Disposición de Excretas','');
                $form->select('disp_exc','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('emb_nd','Embarazo no deseado','');
                $form->select('emb_nd','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('cond_econ','Condición económica que dificulta traslado para buscar atención médica','');
                $form->select('cond_econ','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('cond_vial','Condiciones de vialidad (vías y transporte) en la zona de residencia dificultan el traslado oportuno','');
                $form->select('cond_vial','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('viol_fam','Violencia familiar','');
                $form->select('viol_fam','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('otros_cv','Otros','');
                $form->select('otros_cv','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            // Parte 3
            echo '<div class="content" id="panel3">';
            echo '<fieldset><legend>Parte 3 - Antecedentes Obstétricos</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('nro_emb_ant','N° embarazos anteriores','');
                //select($name,$atributo)
                $form->select('nro_emb_ant','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part3_nro_abor_','N° de abortos','');
                $form->select('part3_nro_abor_','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part3_nro_p_v','N° partos vaginales','');
                $form->select('part3_nro_p_v','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part3_nro_c','N° de cesáreas','');
                $form->select('part3_nro_c','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part3_nro_n_v','Nacidos vivos','');
                $form->select('part3_nro_n_v','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('parte_3_mort','Mortinatos','');
                $form->select('parte_3_mort','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part3_int_int_m','Intervalo Intergenésico (meses)','');
                $form->select('part3_int_int_m','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="content" id="panel4">';
            // Parte 4
            echo '<fieldset><legend>Parte 4 -  Antecedentes Patológicos Embarazos Anteriores</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('none','Ninguno','');
                //input($name,$type,$placeholder,$atributo)
                $form->select('none','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('mol_hid','Mola hidatiforme','');
                $form->select('mol_hid','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('rn_pre','RN pretérmino','');
                $form->select('rn_pre','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('rn_b_p','RN bajo peso','');
                $form->select('rn_b_p','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('rn_macro','RN macrosómico','');
                $form->select('rn_macro','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('tox_e_p','Toxemia (eclampsia, preeclampsia)','');
                $form->select('tox_e_p','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('hemo_emb','Hemorragia del embarazo','');
                $form->select('hemo_emb','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('desp_f_p','Desproporción feto pélvica','');
                $form->select('desp_f_p','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('sep_p','Sepsis puerperal','');
                $form->select('sep_p','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('emb_mul','Embarazo múltiple','');
                $form->select('emb_mul','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('par_pre','Parto prematuro','');
                $form->select('par_pre','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('ant_otro','Otros','');
                $form->select('ant_otro','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('no_reg','No Registrado','');
                $form->select('no_reg','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="content" id="panel5">';
            // Parte 5
            echo '<fieldset><legend>Parte 5 - Antecedente Patológico de Riesgo</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('ant_none','Ninguno','');
                //input($name,$type,$placeholder,$atributo)
                $form->select('ant_none','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('hip_art','Hipertensión arterial','');
                $form->select('hip_art','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('cardio','Cardiopatía','');
                $form->select('cardio','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('diab','Diabetes','');
                $form->select('diab','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('rn_macros','RN macrosómico','');
                $form->select('rn_macros','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('lup','Lupus','');
                $form->select('lup','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('obes','Obesidad','');
                $form->select('obes','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('desn','Desnutrición','');
                $form->select('desn','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('ane','Anemia','');
                $form->select('ane','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('tabaq','Tabaquismo','');
                $form->select('tabaq','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('alcoh','Alcoholismo','');
                $form->select('alcoh','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('drog','Drogadicción','');
                $form->select('drog','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('inf_v_s','Infección VIH/SIDA','');
                $form->select('inf_v_s','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('tum_mal','Tumor maligno','');
                $form->select('tum_mal','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('cirg','Cirugía','');
                $form->select('cirg','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('vdrl','VDRL reactivo','');
                $form->select('vdrl','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('otro_enf_inf','Otra enfermedad infecciosa','');
                $form->select('otro_enf_inf','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('otro_ant_cond_ries','Otro antecedente o condición de riesgo','');
                $form->select('otro_ant_cond_ries','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('ant_riesg_no_reg','No Registrado','');
                $form->select('ant_riesg_no_reg','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel6">';
            // Parte 6
            echo '<fieldset><legend>Parte 6 - Datos Básicos  II</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('contr_pre','Control Prenatal (N° consultas)','');
                //input($name,$type,$placeholder,$atributo)
                $form->select('contr_pre','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('sem_gest','Semanas de gestación al inicio del control prenatal','');
                $form->select('sem_gest','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('cons_alt_ries','Consulta de Alto Riesgo','');
                $form->select('cons_alt_ries','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('tip_emb','Tipo de Embarazo','');
                $form->select('tip_emb','');
                echo '</div>';
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel7">';
            // Parte 7
            echo '<fieldset><legend>Parte 7 - Problemas y Complicaciones Detectadas Durante el Presente Embarazo</legend>';
                echo '<div class="large-6 columns">';
                // label($for, $title, $atributo)
                $form->label('part7_ning','Ninguno','');
                //select($name,$atributo)
                $form->select('part7_ning','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_apend','Apendicitis','');
                $form->select('part7_apend','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_anem','Anemia','');
                $form->select('part7_anem','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_lit_bil','Litiasis Biliar','');
                $form->select('part7_lit_bil','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_inf_uri','Infección Urinaria','');
                $form->select('part7_inf_uri','');
                echo '</div>';
                
                echo '<div class="large-6 columns">';
                $form->label('part7_diab','Diabetes','');
                $form->select('part7_diab','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_v_s','VIH/SIDA','');
                $form->select('part7_v_s','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_toxplas','Toxoplasmosis','');
                $form->select('part7_toxplas','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_hiper_art','Hipertensión arterial','');
                $form->select('part7_hiper_art','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_pre_ecla','Pre-eclampsia','');
                $form->select('part7_pre_ecla','');
                echo '</div>';
                
                echo '<div class="large-6 columns">';
                $form->label('part7_ecla','Eclampsia','');
                $form->select('part7_ecla','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_snd_hlp','Sind Hellp','');
                $form->select('part7_snd_hlp','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_rtd_cmto_utr','Retardo Crecimiento Uterino','');
                $form->select('part7_rtd_cmto_utr','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_desp_f_p','Desproporción feto pélvica','');
                $form->select('part7_desp_f_p','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_fet_mto_ret','Feto Muerto Retenido','');
                $form->select('part7_fet_mto_ret','');
                echo '</div>';
                
                echo '<div class="large-6 columns">';
                $form->label('part7_hmrr_trim','Hemorragia 1er trimestre','');
                $form->select('part7_hmrr_1er','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_hmrr_2do','Hemorragia 2do trimestre','');
                $form->select('part7_hmrr_2do','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_hmrr_3er','Hemorragia 3er trimestre','');
                $form->select('part7_hmrr_3er','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_otra','Otra','');
                $form->select('part7_otra','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part7_no_rgt','No Registrado','');
                $form->select('part7_no_rgt','');
                echo '</div>';               
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel8">';
            // Parte 8
            echo '<fieldset><legend>Parte 8 - Datos Básicos III</legend>';
            //////////////
                echo '<div class="large-12 columns">';
                $form->label('part8_trm_embzo','Terminación del Embarazo','');
                $form->select('part8_trm_embzo','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('parte8_fec_fall','Fecha del Fallecimiento','');
                $form->select('parte8_fec_fall','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('parte8_hor_fall','Hora del Fallecimiento','');
                $form->select('parte8_hor_fall','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part8_fec_ingr','Fecha de Ingreso al Establecimiento','');
                $form->select('part8_fec_ingr','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part8_hor_ingr','Hora de Ingreso al Establecimiento','');
                $form->select('part8_hor_ingr','');
                echo '</div>';            
            //////////////
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel9">';
            // Parte 9
            echo '<fieldset><legend>Parte 9 -  Tiempo entre la  Admisión y  Defunción de la Madre</legend>';
            //////////////
                echo '<div class="large-6 columns">';
                $form->label('part9_nro_dias','N° de días','');
                $form->select('part9_nro_dias','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part9_nro_hrs','N° de horas (en fracciones de dia)','');
                $form->select('part9_nro_hrs','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part9_tmp_hrs','Tiempo en Horas','');
                $form->select('part9_tmp_hrs','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part9_ign','Ignorado','');
                $form->select('part9_ign','');
                echo '</div>';           
            //////////////
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel10">';
            // Parte 10
            echo '<fieldset><legend>Parte 10 - Atención Requerida  al Ingreso</legend>';
            //////////////
                echo '<div class="large-6 columns">';
                $form->label('part10_cmpl_embzro','Complicación durante el embarazo','');
                $form->select('part10_cmpl_embzro','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_abt_evo','Aborto en evolución','');
                $form->select('part10_abt_evo','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_post_abt','Post-aborto','');
                $form->select('part10_post_abt','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_prt','Parto','');
                $form->select('part10_prt','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_fto_mto_ret','Feto Muerto Retenido','');
                $form->select('part10_fto_mto_ret','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_per_post_hsp','Puerperio Post Parto Hospitalario','');
                $form->select('part10_per_post_hsp','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_per_post_ext_hsp','Puerperio Post Parto Extra Hospitalario','');
                $form->select('part10_per_post_ext_hsp','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_csr','Cesárea','');
                $form->select('part10_csr','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_per_post_ces','Puerperio Post Cesárea','');
                $form->select('part10_per_post_ces','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_otro','Otro','');
                $form->select('part10_otro','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part10_no_rgt','No Registrado','');
                $form->select('part10_no_rgt','');
                echo '</div>';            
            //////////////
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel11">';
            // Parte 11
            echo '<fieldset><legend>Parte 11 - Datos Básicos IV</legend>';
            //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Diagnóstico de Ingreso</small></h3>';
                echo '</div>';
                echo '<div class="large-3 columns">';
                $form->label('part11_letra','Letra','');
                $form->select('part11_letra','');
                echo '</div>';
                echo '<div class="large-9 columns">';
                $form->label('part11_dgn_cod','Diagnóstico de Ingreso con Código','');
                $form->select('part11_dgn_cod','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part11_prs_inf_hsp','Presencia de Infección Hospitalaria','');
                $form->select('part11_prs_inf_hsp','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part11_ncr','Necropsia','');
                $form->select('part11_ncr','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part11_rec_grv_prbl','Reconoció Oportunamente la Gravedad del Problema','');
                $form->select('part11_rec_grv_prbl','');
                echo '</div>';
            
            //////////////
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel12">';
            // Parte 12
            echo '<fieldset><legend>Parte 12 - Datos Básicos V</legend>';
            //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Si No Reconoció Oportunamente la Gravedad del Problema, Limitaciones Detectadas</small></h3>';
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part12_desc_sgn_alrm','Desconocimiento de Signos de Alarma','');
                $form->select('part12_desc_sgn_alrm','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part12_rh_aten_med','Rehúsa Atención Médica','');
                $form->select('part12_rh_aten_med','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part12_otro','Otro','');
                $form->select('part12','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part12_no_rgtdo','No Registrado','');
                $form->select('part12_no_rgtdo','');
                echo '</div>';
                echo '<hr>';
                echo '<div class="large-12 columns">';
                $form->label('part12_bsq_op_ate_med','Búsqueda oportuna de atención médica','');
                $form->select('part12_bsq_op_ate_med','');
                echo '</div>';         
            //////////////
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="large-12 columns content" id="panel13">';
            // Parte 13
            echo '<fieldset><legend>Parte 13 - Datos Básicos VI</legend>';
            //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Si no hubo búsqueda oportuna de atención médica, problemas identificados</small></h3>';
                echo '</div>';                
                echo '<div class="large-6 columns">';
                $form->label('part13_dom_lej','Domicilio Lejano','');
                $form->select('part13_dom_lej','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_fal_din_mov','Faltó Dinero para Movilización','');
                $form->select('part13_fal_din_mov','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_fal_din_trns','Faltó Transporte','');
                $form->select('part13_fal_din_trns','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_via_mls_cond','Vía en Malas Condiciones','');
                $form->select('part13_via_mls_cond','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_murt_sub','Muerte súbita','');
                $form->select('part13_murt_sub','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_otro_prob','Otro problema','');
                $form->select('part13_otro_prob','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part13_no_rgtdo','No Registrado','');
                $form->select('part13_no_rgtdo','');
                echo '</div>';
                echo '<hr>';
                echo '<div class="large-6 columns">';
                $form->label('part13_rcb_opr_ate_med','Recibió Oportunamente Atención Médica','');
                $form->select('part13_rcb_opr_ate_med','');
                echo '</div>';
            //////////////
            echo '</fieldset>';
            echo '</div>';
            
            echo '<div class="large-12 columns content" id="panel14">';
            // Parte 14
            echo '<fieldset><legend>Parte 14 - Si No Recibió Oportunamente Atención Médica, Limitaciones Detectadas</legend>';
            //////////////
                echo '<div class="large-6 columns">';
                $form->label('part14_ind_trm_amb','Indicaron tratamiento ambulatorio','');
                $form->select('part14_ind_trm_amb','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part14_est_cupo','Establecimiento sin cupo','');
                $form->select('part14_est_cupo','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part14_dmr_trl_amb','Demora en el traslado por falta de ambulancia para traslado','');
                $form->select('part14_dmr_trl_amb','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part14_dmr_trl_amb_disp','Demora en el traslado por ambulancia no disponible en el momento','');
                $form->select('part14_dmr_trl_amb_disp','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part14_dmr_trl_amb_gsl','Demora en el traslado por falta de gasolina para la ambulancia','');
                $form->select('part14_dmr_trl_amb_gsl','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part14_dmr_trl_caus','Demora en el traslado por otras causas','');
                $form->select('part14_dmr_trl_caus','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part14_no_rgtdo','No Registrado','');
                $form->select('part14_no_rgtdo','');
                echo '</div>';            
            //////////////
            echo '</fieldset>';
            echo '</div>';
            
            echo '<div class="large-12 columns content" id="panel15">';
            // Parte 15
            echo '<fieldset><legend>Parte 15 - Referencia</legend>';
            //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Datos Básicos VII</small></h3>';
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_amto_trasl','Ameritó Traslado','');
                $form->select('part15_amto_trasl','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_mot_trasl_ate','Motivo de traslado por necesidad de atención en UCI','');
                $form->select('part15_mot_trasl_ate','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part15_mot_trasl_obst','Motivo de traslado por falta de obstetra','');
                $form->select('part15_mot_trasl_obst','');
                echo '</div>';
                echo '<div class="large-6 columns">';
                $form->label('part15_mot_trasl_otro','Motivo de traslado por otra causa','');
                $form->select('part15_mot_trasl_otro','');
                echo '</div>';
                echo '<hr>';
                //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Causas de Muerte Materna Directas</small></h3>';
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_comp_direc_mt','Complicación directa que concluye en la muerte','');
                $form->select('part15_comp_direc_mt','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_caus_bas','Causa Básica','');
                $form->select('part15_caus_bas','');
                echo '</div>';
                echo '<hr>';
                //////////////
                echo '<div class="large-12 columns">';
                echo '<h3><small>Causas de Muerte Materna Indirectas</small></h3>';
                echo '</div>'; 
                echo '<div class="large-12 columns">';
                $form->label('part15_caus_comp_embrz_pat_pue','Causa que complica el embarazo, el parto y el puerperio (diagnóstico básico)','');
                $form->select('part15_caus_comp_embrz_pat_pue','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_diag_esp','Diagnóstico específico','');
                $form->select('part15_diag_esp','');
                echo '</div>';
                echo '<hr>';                  
                echo '<div class="large-12 columns">';
                $form->label('part15_','Causas de Muerte No materna','');
                $form->select('part15_','');
                echo '</div>';
                echo '<div class="large-12 columns">';
                $form->label('part15_','La calidad de la atención de salud fue INSUFICIENTE para las necesidades de la paciente','');
                $form->select('part15_','');
                echo '</div>';          
                echo '<button type="submit">Guardar</button>';
            //////////////
            echo '</fieldset>';
            echo '</div>';
            /*
            echo '<div class="large-12 columns content active" id="paneln">';
            // Parte n
            echo '<fieldset><legend>Parte n - (lorem ipsum)</legend>';
            //////////////
            
            
            //////////////
            echo '</fieldset>';
            echo '</div>';
            */
        echo '</div>';

        
    $form->form_F();
    // Fin del Formulario
    $menu->menu_F(); // Imprime el fin del menu 
echo '</div>';
$html->links('JS','js/foundation/foundation.js');
$html->links('JS','js/foundation/foundation.abide.js');
$html->links('JS','js/jquery.js');
$html->links('JS','js/foundation.min.js');
echo '<script>
      $(document).foundation();
    </script>';
$html->body_F();

?>



