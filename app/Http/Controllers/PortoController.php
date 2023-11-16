<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Market;
use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortoController extends Controller
{
    public function porto(): View
    {

        return view('porto.index');
    }

    public function portoList(Kategori $kategori): View
    {
        $pilih = $kategori;

        $portos = Porto::where('kategori_id', '=', $pilih->id)
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        $listKategori = Kategori::count();


        if ($pilih->id === $listKategori) {
            $pilih->id = 1;
        } else {
            $pilih->id += +1;
        }

        $next = Kategori::query()
            ->where('id', '=', $pilih->id)
            ->limit(1)
            ->first();

        return view('porto.detail.list', compact('pilih', 'portos', 'next'));
    }
}
