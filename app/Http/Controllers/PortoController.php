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

        $market = Market::all();

        $kategori = Kategori::all();

        return view('porto.index', compact('kategori', 'market'));
    }

    public function portoList(Kategori $kategori): View
    {

        $portos = Porto::where('kategori_id', '=', $kategori->id)
            ->orderBy('published_at', 'desc')
            ->paginate(6);


        $market = Market::all();

        if ($kategori->id === 8) {
            $kategori->id = 1;
        } else {
            $kategori->id += +1;
        }

        $next = Kategori::query()
            ->where('id', '=', $kategori->id)
            ->limit(1)
            ->first();

        return view('porto.detail.list', compact('kategori', 'portos', 'next', 'market'));
    }
}
