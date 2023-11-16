<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Clicked;
use App\Models\Client;
use App\Models\Kontak;
use App\Models\LandingPage;
use App\Models\Market;
use App\Models\Porto;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function home(): View
    {

        $title = '';

        $portos = Porto::query()
            ->where('isActive', '=', 1)
            ->where('forHomepage', '=', 1)
            ->where('published_at', '!=', null)
            ->limit(4)
            ->orderBy('published_at', 'desc')
            ->get();

        $clients = Client::all();

        $beritas = Berita::query()
            ->where('isActive', '=', 1)
            ->where('published_at', '!=', null)
            ->limit(7)
            ->orderBy('published_at', 'desc')
            ->get();

        $hero = Section::query()
            ->where('nama', '=', 'Hero Image')
            ->where('isActive', '=', 1)
            ->first();

        $wa = Section::query()
            ->where('nama', '=', 'WA Image')
            ->where('isActive', '=', 1)
            ->first();

        return view('home.index', compact('portos', 'beritas', 'clients', 'hero', 'wa'));
    }

    public function submit(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email:dns'
        ]);

        Kontak::create($validatedData);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }

    public function about(): View
    {

        $portos = Porto::query()
            ->where('published_at', '!=', null)
            ->get();

        $clients = Client::all();
        return view('home.about', compact('portos', 'clients'));
    }

    public function contact(): View
    {
        return view('home.contact');
    }

    public function links(): View
    {
        $links = Clicked::all();

        return view('links.index', compact('links'));
    }

    public function click(string $isClikced)
    {
        $clicked = Clicked::query()
            ->where('slug', '=', $isClikced)
            ->get();

        // ddd($clicked);
    }

    public function landing(): View
    {
        $data = LandingPage::query()
            ->where('isActive', '=', 1)
            ->limit(1)
            ->first();

        return view('landing_page.index', compact('data'));
    }
}
