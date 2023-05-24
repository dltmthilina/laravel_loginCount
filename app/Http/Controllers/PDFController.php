<?php

namespace App\Http\Controllers;

use App\Models\ClickCount;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Dompdf\Dompdf;



class PDFController extends Controller
{
    
    public function download(){

        $userId = session('userId');
        $userName = session('userName');
        print "$userId";
        
     try{
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Hello, World!</h1>');
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
        
      

        /* $clickCount = new ClickCount();
        $clickCount-> username = $userId;
        $clickCount-> click_count = $userId; */

        $click = ClickCount::updateOrCreate(

            ['userId' => $userId],
            ['click_count' => \DB::raw('click_count + 1')]
        );

        $click->save();
        
        }catch(Exception $e){
            
            // Return an error response
            return response()->json(['error' => 'PDF generation failed'], 500);
        }
    }

    
}
