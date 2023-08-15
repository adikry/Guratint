<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortoController extends Controller
{
    public function porto(): View
    {
        $kategori = Kategori::all();

        return view('porto.index', compact('kategori'));
    }

    public function portoList(Kategori $kategori): View
    {

        $portos = Porto::where('kategori_id', '=', $kategori->id)
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        return view('porto.detail.list', compact('kategori', 'portos'));
    }

    public function portoDetail(string $kategori, Porto $porto): View
    {
        $newData = Porto::query()
            ->where('slug', '!=', $porto->slug)
            ->inRandomOrder()
            ->first();
        return view('porto.detail.index', compact('kategori', 'porto', 'newData'));
    }
}
