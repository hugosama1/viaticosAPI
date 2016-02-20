<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormatoEventosRequest;
use Excel;
class EventosController extends Controller
{

	public function redirectToDownload(FormatoEventosRequest $request) {
		return view('formato_capacitacion')->with(compact('request'));
	}

    public function generateDocument(FormatoEventosRequest $request)
    {
    	$inputFileName = base_path().'/assets/docs/formato_eventos.xlsx';
		Excel::load($inputFileName, function($excel) use (&$request) {
			$sheet = $excel->getActiveSheet(); 	
			$sheet->setCellValue('E4',$request->input('gerente_nacional'));
			$sheet->setCellValue('O4',$request->input('fecha_solicitud'));
			$sheet->setCellValue('E5',$request->input('coordinador_evento'));
			$sheet->setCellValue('J5',$request->input('puesto_coordinador'));
			$sheet->setCellValue('N5',$request->input('centro_coordinador'));
			$sheet->setCellValue('C9',is_null($request->input('evento_tecnologico')) ? "" : "x");
			$sheet->setCellValue('E9',is_null($request->input('expo')) ? "" : "x");
			$sheet->setCellValue('G9',is_null($request->input('briefing')) ? "" : "x");
			$sheet->setCellValue('I9',is_null($request->input('congreso')) ? "" : "x");
			$sheet->setCellValue('K9',is_null($request->input('diplomado'))? "" : "x");
			$sheet->setCellValue('M9',is_null($request->input('taller'))? "" : "x");
			$sheet->setCellValue('C11',is_null($request->input('visitas_proveedor')) ? "" : "x");
			$sheet->setCellValue('E11',is_null($request->input('foro')) ? "" : "x");
			$sheet->setCellValue('G11',is_null($request->input('curso')) ? "" : "x");
			$sheet->setCellValue('I11',is_null($request->input('simposium')) ? "" : "x");
			$sheet->setCellValue('J11',"otro: " . $request->input('otro_tipo_evento'));
			$sheet->setCellValue('C13',$request->input('nombre_evento'));
			$sheet->setCellValue('C14',$request->input('fecha_inicio'));
			$sheet->setCellValue('J14',$request->input('fecha_final'));
			$sheet->setCellValue('C15',$request->input('duracion_evento'));
			$sheet->setCellValue('C16',$request->input('lugar_evento'));
			if( is_null($request->input('carnet_regalado'))) {
				$sheet->setCellValue('I17',"x");
			}else {				
				$sheet->setCellValue('G17',"x");
			}
			$sheet->setCellValue('O17',$request->input('carnet_regalado_cuantos'));
			$sheet->setCellValue('F18',$request->input('proveedor_carnet'));
			$sheet->setCellValue('O18',$request->input('costo_carnet'));
			$sheet->setCellValue('G19',is_null($request->input('avion')) ? "" : "x");
			$sheet->setCellValue('I19',is_null($request->input('hotel')) ? "" : "x");
			$sheet->setCellValue('K19',is_null($request->input('comidas'))? "" : "x");
			$sheet->setCellValue('N19',$request->input('otro_gastos_proveedor'));
			if( is_null($request->input('solicitar_viaticos'))) {
				$sheet->setCellValue('I20',"x");
			}else {				
				$sheet->setCellValue('G20',"x");
			}
			$sheet->setCellValue('A22',$request->input('objetivo_evento'));
			$sheet->setCellValue('C30',$request->input('link_evento'));
			$sheet->setCellValue('A33',$request->input('justificacion_evento'));
			for($i=0; $i< intval($request->input("cont_asistentes"));$i++) {
				$sheet->setCellValue('B'.(47+$i), $request->input('nombre_asistente'. ($i+1)) );
				$sheet->setCellValue('F'.(47+$i), $request->input('puesto_asistente'. ($i+1)) );
				$sheet->setCellValue('H'.(47+$i), $request->input('centro_asistente'. ($i+1)) );
				$sheet->setCellValue('J'.(47+$i), $request->input('funcion_asistente'. ($i+1)) );
			}
			$sheet->setCellValue('A57',$request->input('anexo'));
		})->download('xlsx');
    }
}