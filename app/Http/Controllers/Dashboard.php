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
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Response;

class Dashboard extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function view()
    {
        $db = new student;



        $data = [
            'siswa' => $db->paginate(10)
        ];
        return view('data-santri', $data);
    }
    public function store(Request $request)
    {
        $file = $request->file('sheet')->getPathname();

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);
        $sheet = $reader->load($file)->getActiveSheet()->toArray();

        for ($i = 1; $i < count($sheet); $i++) {
            $db = new student;

            $date_birth = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($sheet[$i][7]);
            $date_birth = date('Y-m-d', $date_birth);

            $date_sign = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($sheet[$i][16]);
            $date_sign = date('Y-m-d', $date_sign);


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
                'kls_formal' => $sheet[$i][14],
                'kls_diniyah' => $sheet[$i][13],
                'hp_ayah'   => $sheet[$i][11],
                'hp_ibu'    => $sheet[$i][12],
                'tahun_daftar' => $date_sign
            ]);
        }
        return redirect('dashboard/data-santri/');
    }
    public function search(Request $r)
    {
        if ($r->type == 'nama') {
            $db = new student;

            $data = [
                'siswa' => $db->where('nama', 'like', "%" . $r->text . "%")->paginate(10)
            ];

            return view('data-santri', $data);
        } else {
            $db = new student;

            $data = [
                'siswa' => $db->where('nis', 'like', "%" . $r->text . "%")->paginate(10)
            ];

            return view('data-santri', $data);
        }
    }

    public function detail(Request $request, $any)
    {
        $db = new student;
        $data = [

            'siswa' => $db->find($any)
        ];

        return view('detail', $data);
    }
    public function inputData()
    {
        return view('input-data');
    }
    public function inputDataStore(Request $request)
    {

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
            'kls_formal' => $request->klsformal,
            'kls_diniyah' => $request->klsdiniyah,
            'hp_ayah'   => $request->hpayah,
            'hp_ibu'    => $request->hpibu,
            'tahun_daftar' => $request->thndaftar
        ]);
        return redirect('dashboard/data-santri/');
    }

    public function deleteData(Request $request, $id)
    {
        student::destroy($id);

        return Redirect::back();
    }
    public function editData($id)
    {
        $data = [
            'siswa' => student::find($id)
        ];
        return view('edit-data', $data);
    }
    public function editDataStore(Request $request)
    {
        student::find($request->id)
            ->update([
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
                'kls_formal' => $request->klsformal,
                'kls_diniyah' => $request->klsdiniyah,
                'hp_ayah'   => $request->hpayah,
                'hp_ibu'    => $request->hpibu,
                'tahun_daftar' => $request->thndaftar
            ]);
        return redirect('dashboard/data-santri');
    }
    public function getData()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NAMA');
        $sheet->setCellValue('C1', 'NOMOR KK');
        $sheet->setCellValue('D1', 'NOMOR NIK');
        $sheet->setCellValue('E1', 'NOMOR NISN');
        $sheet->setCellValue('F1', 'KELAMIN');
        $sheet->setCellValue('G1', 'TEMPAT LAHIR');
        $sheet->setCellValue('H1', 'ALAMAT');
        $sheet->setCellValue('I1', 'TGL LAHIR');
        $sheet->setCellValue('J1', 'AYAH');
        $sheet->setCellValue('K1', 'IBU');
        $sheet->setCellValue('L1', 'HP AYAH');
        $sheet->setCellValue('M1', 'HP IBU');
        $sheet->setCellValue('N1', 'KELAS DINIYAH');
        $sheet->setCellValue('O1', 'KELAS FORMAL');
        $sheet->setCellValue('P1', 'KAMAR');
        $sheet->setCellValue('Q1', 'TAHUN DAFTAR');
        $sheet->setCellValue('R1', 'NIS');

        $data = student::get();
        $col = 2;
        $no = 1;

        foreach ($data as $d) {
            $p = date_format(date_create_from_format('Y-m-d', $d['tgllahir']), 'd-m-Y');
            $p = strtotime($p);
            $s = date_format(date_create_from_format('Y-m-d', $d['tahun_daftar']), 'd-m-Y');
            $s = strtotime($s);
            $spreadsheet->getActiveSheet()
            ->getStyle('I' . $col)
            ->getNumberFormat()
            ->setFormatCode(
                \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_YYYYMMDDSLASH
            );
            $spreadsheet->getActiveSheet()
            ->getStyle('Q' . $col)
            ->getNumberFormat()
            ->setFormatCode(
                \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_YYYYMMDDSLASH
            );

            $cell = ['C', 'D', 'E', 'L', 'M','R'];

            foreach ($cell as $n) {
                $spreadsheet->getActiveSheet()
                    ->getStyle($n . $col)
                    ->getNumberFormat()
                    ->setFormatCode(
                        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT
                    );
            }




            $p = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($p);
            $s = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($s);





            $sheet->setCellValue('A' . $col, $no++);
            $sheet->setCellValue('B' . $col, $d['nama']);
            $sheet->setCellValue('C' . $col, $d['no_kk']);
            $sheet->setCellValue('D' . $col, $d['no_nik']);
            $sheet->setCellValue('E' . $col, $d['nisn']);
            $sheet->setCellValue('F' . $col, $d['kelamin']);
            $sheet->setCellValue('G' . $col, $d['tptlahir']);
            $sheet->setCellValue('H' . $col, $d['alamat']);
            $sheet->setCellValue('I' . $col, $p);
            $sheet->setCellValue('J' . $col, $d['ayah']);
            $sheet->setCellValue('K' . $col, $d['ibu']);
            $sheet->setCellValue('L' . $col, $d['hp_ayah']);
            $sheet->setCellValue('M' . $col, $d['hp_ibu']);
            $sheet->setCellValue('N' . $col, $d['kls_diniyah']);
            $sheet->setCellValue('O' . $col, $d['kls_formal']);
            $sheet->setCellValue('P' . $col, $d['kamar']);
            $sheet->setCellValue('Q' . $col, $s);
            $sheet->setCellValue('R' . $col, $d['nis']);
            $col++;
        }




        $extension = 'Xlsx';
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, $extension);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"Data Santri.{$extension}\"");
        $writer->save('php://output');
        exit();
    }
}
