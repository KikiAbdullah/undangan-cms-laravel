<?php

namespace App\Http\Controllers\Undangan;

use App\Http\Controllers\Controller;
use App\Model\Undangan\Undangan;
use Illuminate\Http\Request;

class C_undangan extends Controller
{
    public function get_undangan($slug_undangan)
    {
        $content = Undangan::get($slug_undangan);

        if ($content['config'] != null) {
            return view('template/template1', compact('content'));
        } else {
            return redirect('/');
        }
    }
}
