@extends('layout.frontend.main')
@section('container')
    <div id="page-header" class="ph-cap-sm ph-bg-image ph-ghost-scroll ph-image-cover-6 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="assets/img/page-header/blog-ph/blog-ph-1.jpg" alt="Image">
                </div>
            </div>

            <div class="ph-caption max-width-1000">
                <div class="ph-categories ph-appear">
                    <a href="#*perkategori" class="ph-category"></a>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">{{ $berita->judul }}</div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">{{ $berita->judul }}</div>
                </div>
                <div class="ph-meta">
                    <div class="ph-appear">
                        <span class="ph-meta-published">{{ $berita->getFormattedDate() }}</span>
                        <span class="ph-meta-posted-by">by: {{ $berita->user->name }}</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="tt-scroll-down">
            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                <div class="tt-sd-arrow">
                    <div class="tt-sd-arrow-inner"></div>
                </div>
                <div class="tt-sd-text">Scroll</div>
            </a>
        </div>


        <div class="ph-share ph-appear">
            <div class="ph-share-inner">
                <div class="ph-share-trigger">
                    <div class="ph-share-text">Share</div>
                    <div class="ph-share-icon"><i class="fas fa-share"></i></div>
                </div> <!-- /.ph-share-trigger -->

                <div class="social-buttons">
                    <ul>
                        <li><a href="#" class="magnetic-item" title="Share on Facebook"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="magnetic-item" title="Share on Twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="magnetic-item" title="Share on Pinterest"><i
                                    class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div id="page-content">

        <div class="tt-section">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">

                    <!-- Content column -->
                    <div class="tt-col-lg-8">

                        <article class="tt-blog-post lightgallery">


                            <div class="tt-blog-post-content">

                                {!! $berita->body !!}

                            </div>

                            <div class="tt-blog-post-share">
                                <div class="tt-bps-text">Share:</div>
                                <div class="social-buttons">
                                    <ul>
                                        <li><a href="#" class="magnetic-item" rel="noopener"
                                                title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="magnetic-item" rel="noopener"
                                                title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="magnetic-item" rel="noopener"
                                                title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </article>


                        <!-- Begin blog post nav
                                                                                        ======================== -->
                        <div class="tt-blog-post-nav">
                            <div class="tt-bp-nav-col tt-bp-nav-left">
                                <div class="tt-bp-nav-text">
                                    @if ($prev)
                                        <span><i class="fas fa-angle-left"></i></span>
                                        Sebelumnya
                                    @endif
                                </div>
                                @if ($prev)
                                    <h4 class="tt-bp-nav-title">
                                        <a
                                            href="/blog/{{ $prev->kategori->slug }}/{{ $prev->slug }}">{{ $prev->judul }}</a>
                                    </h4>
                                @endif
                            </div>
                            <div class="tt-bp-nav-col tt-bp-nav-right">
                                <div class="tt-bp-nav-text">
                                    @if ($next)
                                        Selanjutnya
                                        <span><i class="fas fa-angle-right"></i></span>
                                    @endif
                                </div>
                                @if ($next)
                                    <h4 class="tt-bp-nav-title">
                                        <a
                                            href="/blog/{{ $next->kategori->slug }}/{{ $next->slug }}">{{ $next->judul }}</a>
                                    </h4>
                                @endif
                            </div>
                        </div>
                        <!-- End blog post nav -->


                    </div> <!-- /.col (Content column) -->

                    <!-- Sidebar column -->
                    <div class="tt-col-lg-4">

                        <!-- Begin sidebar (classic)
                                                                                        =============================
                                                                                        Note: add class "tt-lg-row-reverse" to "tt-row" above to align sidebar to the left.
                                                                                        -->
                        <div class="tt-sidebar">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-search">
                                <h3 class="sidebar-heading">Search</h3>

                                <!-- Begin form (Note: for design purposes only!)
                                                                                                ================
                                                                                                * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                                                                                                * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                                                                                                -->
                                <form>
                                    <div class="tt-form-btn-inside">
                                        <input class="tt-form-control" type="text" id="search"
                                            placeholder="Type something & hit enter" required>
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                                <!-- End form -->

                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-categories">
                                <h3 class="sidebar-heading">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="blog-archive.html">Web Design <span
                                                title="Entries in this category">26</span></a></li>
                                    <li><a href="blog-archive.html">Resources <span
                                                title="Entries in this category">12</span></a></li>
                                    <li><a href="blog-archive.html">Tutorials <span
                                                title="Entries in this category">19</span></a></li>
                                    <li><a href="blog-archive.html">Freebies <span
                                                title="Entries in this category">31</span></a></li>
                                    <li><a href="blog-archive.html">Inspiration <span
                                                title="Entries in this category">67</span></a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-post-list">
                                <!-- Can be "Recent Posts" or "Popular Posts" etc. -->
                                <h3 class="sidebar-heading">Popular Posts</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Why Some People Save Money
                                                    With This Method</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                            <span class="sidebar-post-date">May 14, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Want to Step Up Your Skills?
                                                    You Need to Read This First</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                            <span class="sidebar-post-date">May 12, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Secrets to Getting Your
                                                    Project to Complete Quickly</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="sidebar-post-date">May 17, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">How to Win Friends and
                                                    Influence People?</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="sidebar-post-date">May 21, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-comments-list">
                                <h3 class="sidebar-heading">Recent Comments</h3>
                                <ul class="list-unstyled">
                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">John Doe</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae
                                                hendrerit orci vitae amet lacus tertis ...</a>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">David
                                                        Bradley</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et
                                                dui morbi. Non mauris nautis trettis ...</a>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">Kate
                                                        Dixon</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi
                                                tincidunt gravida vistrim nocktac fitset ...</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-tags">
                                <h3 class="sidebar-heading">Tags</h3>
                                <div class="sidebar-tags-list">
                                    <ul>
                                        <li><a href="blog-archive.html">#portfolio</a></li>
                                        <li><a href="blog-archive.html">#multipurpose</a></li>
                                        <li><a href="blog-archive.html">#minimal</a></li>
                                        <li><a href="blog-archive.html">#agency</a></li>
                                        <li><a href="blog-archive.html">#creatives</a></li>
                                        <li><a href="blog-archive.html">#freelancers</a></li>
                                        <li><a href="blog-archive.html">#design</a></li>
                                        <li><a href="blog-archive.html">#bootstrap</a></li>
                                        <li><a href="blog-archive.html">#responsive</a></li>
                                        <li><a href="blog-archive.html">#simple</a></li>
                                        <li><a href="blog-archive.html">#creative</a></li>
                                        <li><a href="blog-archive.html">#blog</a></li>
                                        <li><a href="blog-archive.html">#wordpress</a></li>
                                        <li><a href="blog-archive.html">#black &amp; white</a></li>
                                    </ul>
                                </div> <!-- /.sidebar-tags-list -->
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-meta">
                                <h3 class="sidebar-heading">Meta</h3>
                                <ul class="list-unstyled">
                                    <li><a href="">Log In</a></li>
                                    <li><a href="">Entries RSS</a></li>
                                    <li><a href="">Comments RSS</a></li>
                                    <li><a href="https://themetorium.net" target="_blank" rel="noopener"
                                            class="tt-link">Themetorium.net</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div>
                        <!-- End sidebar (classic) -->

                    </div> <!-- /.col -->
                </div> <!-- /.row -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
                                                                        ///// Begin tt-section /////
                                                                        ============================
                                                                        * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                                                                        -->
        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin page nav
                                                                                ====================
                                                                                * Use class "tt-pn-center" to align page nav to center.
                                                                                * Use class "tt-pn-stroke" to enable title stroke style.
                                                                                -->
                <div class="tt-page-nav tt-pn-stroke">
                    <a href="portfolio-grid-creative.html" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fas fa-arrow-right'></i>">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a> <!-- /.tt-pn-link -->
                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>
                </div>
                <!-- End page nav -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
@endsection
