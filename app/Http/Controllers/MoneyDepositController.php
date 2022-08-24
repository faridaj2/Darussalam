<?php

namespace App\Http\Controllers;

use App\Models\money_deposit;
use App\Http\Requests\Storemoney_depositRequest;
use App\Http\Requests\Updatemoney_depositRequest;
use App\Models\md_list;
use App\Models\money_re;
use App\Models\student;
use Illuminate\Http\Request;

class MoneyDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kategori' => money_deposit::get()
        ];
        return view('penitipan-uang', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory(Request $request)
    {
        $db = new money_deposit();
        $db::create([
            'nama_penyimpanan' => $request->kategori,
        ]);
        return redirect()->back();
    }
    public function destroy($slug)
    {
        $id = money_deposit::firstWhere('slug', $slug)->id;
        money_deposit::destroy($id);
        return redirect()->back();
    }
    public function showKategori(Request $request, $slug)
    {
        $money = [];
        $id = money_deposit::firstWhere('slug', $slug)->id;

        foreach (md_list::where('money_deposit_id', $id)->get() as $item) {
            if ($item->money_re->last() == null) {
                array_push($money, 0);
            } else {
                array_push($money, $item->money_re->last()->uang_total);
            }
        }

        $data = [
            'student' => md_list::where('money_deposit_id', $id)->get(),
            'money' => $money
            // 'money_total' =>
        ];
        return view('kategori_detail', $data);
    }
    public function insertStudent(Request $request, $slug)
    {
        if ($request->data == null) {
            return redirect()->back()->with(['danger' => 'Tidak ada data terpilih']);
        }
        $id = explode(',', $request->data);
        $into = money_deposit::firstWhere('slug', $slug);
        foreach ($id as $id) {
            if (md_list::firstWhere(['money_deposit_id' => $into->id, 'student_id' => $id])) {
                continue;
            }
            md_list::create([
                'student_id' => $id,
                'money_deposit_id' => $into->id
            ]);
        }
        return redirect()->back()->with(['success' => 'Data berhasil dimasukkan ke ' . $into->nama_penyimpanan]);
    }

    public function storeMoney(Request $request)
    {
        money_re::create([
            ''
        ]);
    }

    public function detail(Request $request, $id){
        $data = [
            'student' => md_list::firstWhere('id', $id)
        ];
        return view('detail_deposite', $data);
    }
    public function delete(Request $request, $id){
        md_list::destroy($id);
        return redirect()->back();
    }


}
