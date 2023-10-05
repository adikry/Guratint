<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner">

        <div class="tt-header-col">

            <div class="tt-logo">
                <a href="/">
                    <img src="/assets/img/Logo Guratint.png" class="tt-logo-light magnetic-item" alt="Logo" />
                </a>
            </div>

        </div>

        <div class="tt-header-col">

            <div id="tt-ol-menu-toggle-btn-wrap">
                <div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
                    <div class="tt-ol-menu-toggle-btn-text">
                        <span class="text-menu" data-hover="Open">Menu</span>
                        <span class="text-close">Close</span>
                    </div>

                </div>

                <div class="tt-ol-menu-toggle-btn-holder">
                    <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                </div>

            </div>


            <nav class="tt-overlay-menu tt-ol-menu-count">
                <div class="tt-ol-menu-ghost">Explore</div>
                <div class="tt-ol-menu-holder">
                    <div class="tt-ol-menu-inner tt-wrap">
                        <div class="tt-ol-menu-content">

                            <ul class="tt-ol-menu-list">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li>

                                <li class="{{ Request::is('portofolio*') ? 'active' : '' }}">
                                    <a href="/portofolio">Portfolio</a>
                                </li>

                                <li class="{{ Request::is('about-us*') ? 'active' : '' }}">
                                    <a href="/about-us">Tentang Kami</a>
                                </li>

                                <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                                    <a href="/blog">Blog</a>
                                </li>

                                <li class="{{ Request::is('contact*') ? 'active' : '' }}">
                                    <a href="/contact">Kontak</a>
                                </li>
                            </ul>


                            <ul class="tt-ol-menu-social">
                                <li>
                                    <h6 class="tt-ol-menu-social-heading">
                                        Social Links:
                                    </h6>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/guratint?mibextid=ZbWKwL" target="_blank"
                                        rel="noopener">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/guratint/" target="_blank"
                                        rel="noopener">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@guratint.id" target="_blank"
                                        rel="noopener">Tiktok</a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+6285174173451?text=Hallo%20Admin%20GuraTint" target="_blank"
                                        rel="noopener">Whatsapp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
