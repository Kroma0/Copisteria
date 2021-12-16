<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrinterController extends Controller
{
    function view(Request $request){
        $controller = new SessionController;
        $data = $controller->accessSessionData($request);
        return view('view', ['data' => $data]);
    }

    public function queue(Request $request)
    {
        $controller = new SessionController;
        $data = $controller->accessSessionData($request);
        array_push($data[$request["n_impresora"]]["queue"], $request["texto"]);
        $request->session()->put('printers', $data);
        return view('view', ['data' => $data]);

    }

    public function print(Request $request)
    {
        $characters = 0;
        $controller = new SessionController;
        $data = $controller->accessSessionData($request);
        for ($i=0; $i < count($data[$request["impresora"]]["queue"]); $i++) { 
            $characters += strlen($data[$request["impresora"]]["queue"][$i]);
        }
        $data[$request["impresora"]]["ink"]["black"] -= $characters * 0.15;
        $data[$request["impresora"]]["ink"]["yellow"] -= $characters * 0.25;
        $data[$request["impresora"]]["ink"]["blue"] -= $characters * 0.25;
        $data[$request["impresora"]]["ink"]["magenta"] -= $characters * 0.25;
        if ($data[$request["impresora"]]["queue"] != null) {
            $data[3]++;
        }
        $data[$request["impresora"]]["queue"] = [];
        $request->session()->put('printers', $data);
        return view('view', ['data' => $data]);

        
    }


    

    
}
