<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Model\Akad\Akad;
use App\Model\Foto_prewed\Foto_prewed;
use App\Model\Moment\Moment;
use App\Model\Pengantin\Pengantin;
use App\Model\Resepsi\Resepsi;
use App\Model\Undangan\Undangan;
use Illuminate\Http\Request;

class C_form extends Controller
{
    public function index()
    {
        return view('form.index');
    }

    public function store(Request $request)
    {
        $slug_undangan = $request->panggilan_pria . '_' . $request->panggilan_wanita;

        $path = base_path('public/upload/undangan/' . $slug_undangan . '/');


        //INSERT PENGANTIN
        $pengantin = new Pengantin;
        $pengantin->slug_undangan = $slug_undangan;
        $pengantin->nama_pria = $request->nama_pria;
        $pengantin->panggilan_pria = $request->panggilan_pria;
        $pengantin->ig_pria = $request->ig_pria;
        $pengantin->ayah_pria = $request->ayah_pria;
        $pengantin->ibu_pria = $request->ibu_pria;
        $pengantin->nama_wanita = $request->nama_wanita;
        $pengantin->panggilan_wanita = $request->panggilan_wanita;
        $pengantin->ig_wanita = $request->ig_wanita;
        $pengantin->ayah_wanita = $request->ayah_wanita;
        $pengantin->ibu_wanita = $request->ibu_wanita;

        //upload foto pengantin
        if ($request->file('foto_pria') != null) {
            $foto_pria = $request->file('foto_pria');
            $pengantin->foto_pria   = $foto_pria->getClientOriginalName();
            // upload foto_pria
            $foto_pria->move($path . 'pengantin/', $foto_pria->getClientOriginalName());
        }
        if ($request->file('foto_wanita') != null) {
            $foto_wanita = $request->file('foto_wanita');
            $pengantin->foto_wanita   = $foto_wanita->getClientOriginalName();
            // upload foto_wanita
            $foto_wanita->move($path . 'pengantin/', $foto_wanita->getClientOriginalName());
        }
        $pengantin->save();
        //END INSERT PENGANTIN

        //INSERT AKAD
        $akad = new Akad;
        $akad->slug_undangan = $slug_undangan;
        $akad->tanggal_akad = $request->tanggal_akad;
        $akad->jam_akad = $request->jam_akad;
        $akad->tempat_akad = $request->tempat_akad;
        $akad->save();
        //END INSERT AKAD

        //INSERT RESEPSI
        $resepsi = new Resepsi;
        $resepsi->slug_undangan = $slug_undangan;
        $resepsi->tanggal_resepsi = $request->tanggal_resepsi;
        $resepsi->jam_resepsi = $request->jam_resepsi;
        $resepsi->tempat_resepsi = $request->tempat_resepsi;
        $resepsi->save();
        //END INSERT RESEPSI

        //INSERT MOMENT
        $moment = new Moment;
        $moment->slug_undangan = $slug_undangan;
        $moment->judul_moment_1 = $request->judul_moment_1;
        $moment->tanggal_moment_1 = $request->tanggal_moment_1;
        $moment->isi_moment_1 = $request->isi_moment_1;
        $moment->judul_moment_2 = $request->judul_moment_2;
        $moment->tanggal_moment_2 = $request->tanggal_moment_2;
        $moment->isi_moment_2 = $request->isi_moment_2;
        $moment->judul_moment_3 = $request->judul_moment_3;
        $moment->tanggal_moment_3 = $request->tanggal_moment_3;
        $moment->isi_moment_3 = $request->isi_moment_3;

        //upload foto moment
        if ($request->file('foto_moment_1') != null) {
            $foto_moment_1 = $request->file('foto_moment_1');
            $moment->foto_moment_1   = $foto_moment_1->getClientOriginalName();
            // upload foto_moment_1
            $foto_moment_1->move($path . 'moment/', $foto_moment_1->getClientOriginalName());
        }
        if ($request->file('foto_moment_2') != null) {
            $foto_moment_2 = $request->file('foto_moment_2');
            $moment->foto_moment_2   = $foto_moment_2->getClientOriginalName();
            // upload foto_moment_2
            $foto_moment_2->move($path . 'moment/', $foto_moment_2->getClientOriginalName());
        }
        if ($request->file('foto_moment_3') != null) {
            $foto_moment_3 = $request->file('foto_moment_3');
            $moment->foto_moment_3   = $foto_moment_3->getClientOriginalName();
            // upload foto_moment_3
            $foto_moment_3->move($path . 'moment/', $foto_moment_3->getClientOriginalName());
        }
        $moment->save();
        //END INSERT MOMENT


        //INSERT GALERI
        $foto_prewed = new Foto_prewed;
        $foto_prewed->slug_undangan = $slug_undangan;
        //upload foto
        if ($request->file('foto_1') != null) {
            $foto_1 = $request->file('foto_1');
            $foto_prewed->foto_1   = $foto_1->getClientOriginalName();
            // upload foto_1
            $foto_1->move($path . 'foto_prewed/', $foto_1->getClientOriginalName());
        }
        if ($request->file('foto_2') != null) {
            $foto_2 = $request->file('foto_2');
            $foto_prewed->foto_2   = $foto_2->getClientOriginalName();
            // upload foto_2
            $foto_2->move($path . 'foto_prewed/', $foto_2->getClientOriginalName());
        }
        if ($request->file('foto_3') != null) {
            $foto_3 = $request->file('foto_3');
            $foto_prewed->foto_3   = $foto_3->getClientOriginalName();
            // upload foto_3
            $foto_3->move($path . 'foto_prewed/', $foto_3->getClientOriginalName());
        }
        if ($request->file('foto_4') != null) {
            $foto_4 = $request->file('foto_1');
            $foto_prewed->foto_4   = $foto_1->getClientOriginalName();
            // upload foto_4
            $foto_4->move($path . 'foto_prewed/', $foto_4->getClientOriginalName());
        }
        if ($request->file('foto_5') != null) {
            $foto_5 = $request->file('foto_5');
            $foto_prewed->foto_5   = $foto_5->getClientOriginalName();
            // upload foto_5
            $foto_5->move($path . 'foto_prewed/', $foto_5->getClientOriginalName());
        }
        if ($request->file('foto_6') != null) {
            $foto_6 = $request->file('foto_6');
            $foto_prewed->foto_6   = $foto_6->getClientOriginalName();
            // upload foto_6
            $foto_6->move($path . 'foto_prewed/', $foto_6->getClientOriginalName());
        }
        if ($request->file('foto_7') != null) {
            $foto_7 = $request->file('foto_7');
            $foto_prewed->foto_7   = $foto_7->getClientOriginalName();
            // upload foto_7
            $foto_7->move($path . 'foto_prewed/', $foto_7->getClientOriginalName());
        }
        if ($request->file('foto_8') != null) {
            $foto_8 = $request->file('foto_8');
            $foto_prewed->foto_8   = $foto_8->getClientOriginalName();
            // upload foto_8
            $foto_8->move($path . 'foto_prewed/', $foto_8->getClientOriginalName());
        }
        if ($request->file('foto_9') != null) {
            $foto_9 = $request->file('foto_9');
            $foto_prewed->foto_9   = $foto_9->getClientOriginalName();
            // upload foto_9
            $foto_9->move($path . 'foto_prewed/', $foto_9->getClientOriginalName());
        }
        if ($request->file('foto_10') != null) {
            $foto_10 = $request->file('foto_10');
            $foto_prewed->foto_10   = $foto_10->getClientOriginalName();
            // upload foto_10
            $foto_10->move($path . 'foto_prewed/', $foto_10->getClientOriginalName());
        }
        $foto_prewed->save();
        //END INSERT GALERI

        //INSERT UNDANGAN (KONFIGURASI)
        $undangan = new Undangan;
        $undangan->slug_undangan = $slug_undangan;
        $undangan->lokasi = $request->lokasi;
        $undangan->gmaps = $request->gmaps;
        $undangan->gcalendar = $request->gcalendar;
        $undangan->quote_custom = $request->quote_custom;
        $undangan->show_undangan = '1';
        $undangan->lokasi = $request->template;

        //upload gambar
        if ($request->file('logo') != null) {
            $logo = $request->file('logo');
            $undangan->logo   = $logo->getClientOriginalName();
            // upload logo
            $logo->move($path . 'config/', $logo->getClientOriginalName());
        }
        if ($request->file('background_1') != null) {
            $background_1 = $request->file('background_1');
            $undangan->background_1   = $background_1->getClientOriginalName();
            // upload background_1
            $background_1->move($path . 'config/', $background_1->getClientOriginalName());
        }
        if ($request->file('background_2') != null) {
            $background_2 = $request->file('background_2');
            $undangan->background_2   = $background_2->getClientOriginalName();
            // upload background_2
            $background_2->move($path . 'config/', $background_2->getClientOriginalName());
        }
        if ($request->file('background_3') != null) {
            $background_3 = $request->file('background_3');
            $undangan->background_3   = $background_3->getClientOriginalName();
            // upload background_3
            $background_3->move($path . 'config/', $background_3->getClientOriginalName());
        }

        $undangan->save();
        //END INSERT UNDANGAN (KONFIGURASI)
        return redirect('form');
    }
}
