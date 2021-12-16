<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterCenter extends Model
{
    public $printers;
    use HasFactory;
    public function __construct() {
        $this->printers = [
        new Printer("Printer1"),
        new Printer("Printer2"),
        new Printer("Printer3"),
        ];
    }
}
