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
        $db = new student;

        

        $data = [
            'siswa' => $db->paginate(10)
        ];
        return view('data-santri', $data);
    }
    public function store(Request $request){
        $file = $request->file('sheet')->getPathname();

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);
        $sheet = $reader->load($file)->getActiveSheet()->toArray();

        for ($i=1; $i < count($sheet); $i++) { 
            $db = new student;

            $date_birth = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($sheet[$i][7]);
            $date_birth = date('Y-m-d',$date_birth);

            $date_sign = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($sheet[$i][16]);
            $date_sign = date('Y-m-d',$date_sign);


            $db::create([
                'nis'       => $sheet[$i][17],
                'nama'      => $sheet[$i][1],
                'no_kk'     => $sheet[$i][2],
                'no_nik'    => $sheet[$i][3],
                'nisn'      => $sheet[$i][4],
                'kelamin'   => $sheet[$i][5],
                'ibu'       => $sheet[$i][10],
                'ayah'      => $sheet[$i][9],
                'tptlahir'  => $sheet[$i][6],
                'tgllahir'  => $date_birth,
                'alamat'    => $sheet[$i][8],
                'kamar'     => $sheet[$i][15],
                'kls_formal'=> $sheet[$i][14],
                'kls_diniyah'=> $sheet[$i][13],
                'hp_ayah'   => $sheet[$i][11],
                'hp_ibu'    => $sheet[$i][12],
                'tahun_daftar' => $date_sign
            ]);
            
        }
        return redirect('dashboard/data-santri/');
    }
    public function search(Request $r){
        if($r->type == 'nama'){
            $db = new student;

            $data = [
                'siswa' => $db->where('nama', 'like', "%" . $r->text . "%")->paginate(10)
            ];
            
            return view('data-santri', $data);
        }else{
            $db = new student;

            $data = [
                'siswa' => $db->where('nis', 'like', "%" . $r->text . "%")->paginate(10)
            ];
            
            return view('data-santri', $data);
        }
    }

    public function detail(Request $request, $any){
        $db = new student;
        $data = [
            
            'siswa' => $db->find($any)
        ];

        return view('detail', $data);
    }
    public function inputData(){
        return view('input-data');
    }
    public function inputDataStore(Request $request){

        $db = new student;
        $db::create([
            'nis'       => $request->nis,
            'nama'      => $request->nama,
            'no_kk'     => $request->kk,
            'no_nik'    => $request->nik,
            'nisn'      => $request->nisn,
            'kelamin'   => $request->kelamin,
            'ibu'       => $request->ibu,
            'ayah'      => $request->ayah,
            'tptlahir'  => $request->tptlahir,
            'tgllahir'  => $request->tgllahir,
            'alamat'    => $request->alamat,
            'kamar'     => $request->kamar,
            'kls_formal'=> $request->klsformal,
            'kls_diniyah'=> $request->klsdiniyah,
            'hp_ayah'   => $request->hpayah,
            'hp_ibu'    => $request->hpibu,
            'tahun_daftar' => $request->thndaftar
        ]);
    }

}
