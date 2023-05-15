<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Dompdf\Dompdf;



class PDFController extends Controller
{
    
    public function download(){

     try{
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Hello, World!</h1>');
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();

        }catch(Exception $e){
            Log::error($e->getMessage());
            
            // Return an error response
            return response()->json(['error' => 'PDF generation failed'], 500);
        }
    }
}
