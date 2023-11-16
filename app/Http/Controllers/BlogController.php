<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Market;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function index(Request $request): View
    {

        $beritas = Berita::query()
            ->filter(request(['q']))
            ->where('isActive', '=', 1)
            ->where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->paginate(5)
            ->withQueryString();

        $kategories = Kategori::query()
            ->join('berita', 'kategori_id', '=', 'kategori.id')
            ->select('kategori.nama', 'kategori.slug', DB::raw('count(*) as total'))
            ->where('isActive', '=', 1)
            ->where('published_at', '!=', null)
            ->groupBy(['kategori.nama', 'kategori.slug'])
            ->orderBy('kategori.id')
            ->get();
        $pilih = null;

        return view('blog.index', compact('beritas', 'kategories', 'pilih'));
    }

    public function blogList(string $kategori, Request $request): View
    {
        $beritas = Berita::query()
            ->filter(request(['q']))
            ->where('isActive', '=', 1)
            ->whereHas('kategori', function ($query) use ($kategori) {
                $query->where('slug', '=', $kategori);
            })
            ->where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->paginate(5)
            ->withQueryString();

        $kategories = Kategori::query()
            ->join('berita', 'kategori_id', '=', 'kategori.id')
            ->select('kategori.nama', 'kategori.slug', DB::raw('count(*) as total'))
            ->where('published_at', '!=', null)
            ->where('isActive', '=', 1)
            ->groupBy(['kategori.nama', 'kategori.slug'])
            ->orderBy('kategori.id')
            ->get();
        $pilih = $kategori;

        $market = Market::all();

        return view('blog.index', compact('beritas', 'kategories', 'pilih', 'market'));
    }

    public function blogDetail(string $kategori, Berita $berita): View
    {
        if (!$berita->isActive || $berita->published_at > Carbon::now()) {
            throw new NotFoundHttpException();
        }

        $next = Berita::query()
            ->where('isActive', '=', 1)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '<', $berita->published_at)
            ->orderBy('published_at', 'desc')
            ->limit(1)
            ->first();

        $prev = Berita::query()
            ->where('isActive', '=', 1)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '>', $berita->published_at)
            ->orderBy('published_at', 'asc')
            ->limit(1)
            ->first();

        $market = Market::all();

        $kategories = Kategori::query()
            ->join('berita', 'kategori_id', '=', 'kategori.id')
            ->select('kategori.nama', 'kategori.slug', DB::raw('count(*) as total'))
            ->where('published_at', '!=', null)
            ->where('isActive', '=', 1)
            ->groupBy(['kategori.nama', 'kategori.slug'])
            ->orderBy('kategori.id')
            ->get();

        $pilih = $kategori;

        return view('blog.detail', compact('pilih', 'berita', 'next', 'prev', 'market', 'kategories'));
    }
}
