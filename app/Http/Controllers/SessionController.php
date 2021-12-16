<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\PrinterCenter;

use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function setSession(Request $request) {
        $data = [];
        for ($i=0; $i < 3; $i++) { 
            $printer = [
                "Printer".$i+1,
                "queue" => [],
                "ink" => [
                    "black" => 100,
                    "yellow" => 100, 
                    "blue" => 100,
                    "magenta" => 100,
                ],
            ];
            array_push($data, $printer);
        }
        $sheets = 0;
        array_push($data, $sheets);
        $request->session()->put('printers', $data);  
        return $data;
    }
    
    
    public function accessSessionData(Request $request) {
        if($request->session()->has('printers')) {
            $data = $request->session()->get('printers');
            return $data;
        } else {
            return $this->setSession($request);
        }
     }

    public function resetSession(){
        Session::flush();
        return;
    }
}
