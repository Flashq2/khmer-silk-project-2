<?php

namespace App\Http\Controllers;

use App\MainSystem\system;
use App\Models\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    
    protected $system;
    function __construct()
    {
        $this->system = new system() ;
    }
    public function index(){
        $page = "Tables" ;
        $tabe_id = '1001' ;
        $page_id = '1001' ;
        $prefix = 'tables';
        $records = Tables::get();
        $param =[
            'page' => $page ,
            'tabe_id' => $tabe_id,
            'page_id' => $page_id ,
            'prefix' => $prefix,
            'records' => $records
        ];
        return view('admin.tables.tables',$param) ;
    }
}