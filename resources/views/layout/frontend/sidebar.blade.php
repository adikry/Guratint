<div class="tt-sidebar tt-fixed">

    <div class="sidebar-widget sidebar-search">
        <h3 class="sidebar-heading">Search</h3>

        <form action="/blog" method="get" role="form">
            <div class="tt-form-btn-inside">
                <input class="tt-form-control" type="text" name="q" id="search"
                    placeholder="Type something & hit enter" required>
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

    </div>

    <div class="sidebar-widget sidebar-categories">
        <h3 class="sidebar-heading">Kategori</h3>
        <ul class="list-unstyled">
            @foreach ($kategories as $kategori)
                <li><a href="/blog/{{ $kategori->slug }}">{{ $kategori->nama }} <span
                            title="Artikel dalam Kategori">{{ $kategori->total }}</span></a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
