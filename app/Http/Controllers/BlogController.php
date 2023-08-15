<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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

        // Artikel::latest()->filter(request(['keyword', 'rubrik']))->whereNotNull('published_at')->paginate(9)->withQueryString(),

        $kategories = Kategori::all();
        $kategori = null;
        return view('blog.index', compact('beritas', 'kategories', 'kategori'));
    }

    public function blogList(string $kategori, Request $request): View
    {
        $beritas = Berita::query()
            ->filter(request(['q']))
            ->where('isActive', '=', 1)
            ->whereHas('kategori', function (Builder $query) use ($kategori) {
                $query->where('slug', $kategori);
            })
            ->where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->paginate(5)
            ->withQueryString();

        $kategories = Kategori::all();

        $titleKat = Kategori::query()
            ->where('slug', '=', $kategori)
            ->first();

        return view('blog.index', compact('beritas', 'kategories', 'kategori', 'titleKat'));
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

        return view('blog.detail', compact('kategori', 'berita', 'next', 'prev'));
    }
}
