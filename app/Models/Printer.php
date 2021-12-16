<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    
    public $name;
    public $queue;
    public $ink;

    public function getPrinters() {
        $data = [];
        $this->name = $name;
        $this->queue;
        $this->ink = [
            "black" => 100,
            "yellow" => 100,
            "blue " => 100,
            "magenta" => 100,
        ];

        for ($i=0; $i < 3; $i++) { 
            array_push($data, "printer".$i+1);
        }

        return $data
    }

    

    function getPrinters(){
        return $printers = ["printer1",new Printer("printer2"),new Printer("printer3")];
    }


}
