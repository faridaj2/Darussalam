<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Routing\Controller as BaseController;
use App\Models\student;


class Dashboard extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function view(){
        return view('data-santri');
    }
    public function storex(Request $request){
        $file = $request->file('sheet')->getPathname();

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);
        $sheet = $reader->load($file)->getActiveSheet()->toArray();

        for ($i=0; $i < count($sheet); $i++) { 
            $db = new student;
            $db::create([
                'nis' => null,
                'nama' => $sheet[$i][1]
            ]);
        }
    }

}
