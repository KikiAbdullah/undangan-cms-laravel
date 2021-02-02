<?php

namespace App\Http\Controllers\Undangan;

use App\Http\Controllers\Controller;
use App\Model\Ucapan\Ucapan;
use App\Model\Undangan\Undangan;
use Illuminate\Http\Request;

class C_undangan extends Controller
{
    public function get_undangan($slug_undangan)
    {
        $content = Undangan::get($slug_undangan);

        if ($content['config'] != null) {
            return view('template/' . $content['config']->template, compact('content'));
        } else {
            return redirect('/');
        }
    }

    public function send_ucapan(Request $request)
    {
        $ucapan = new Ucapan;
        $ucapan->slug_undangan = $request->slug_undangan;
        $ucapan->foto_pengirim = $request->foto_pengirim;
        $ucapan->pengirim = $request->pengirim;
        $ucapan->ucapan = $request->ucapan;

        $ucapan->save();

        return redirect('/' . $request->slug_undangan);
    }
}
