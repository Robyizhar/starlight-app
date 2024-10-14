<header id="header" class="tt-nav transparent-header">
    <div class="header-sticky light-header">
        <div class="container">
            <div id="materialize-menu" class="menuzord">
                <a href="{{ url('/') }}" class="logo-brand">
                    <img src="{{ asset('storage/logo/Logo-Starlightbooks-(Hitam)(coped) (1).png') }}" alt=""/>
                </a>
                <ul class="menuzord-menu pull-right">
                    <li class="{{ empty(Request::segment(1)) ? 'active' : ''}}" data={{Request::segment(1)}}>
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'book-catalog' ? 'active' : ''}}">
                        <a href="{{ url('/book-catalog') }}">Katalog Buku</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="underMaintenance(event)">Cara Terbit</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="underMaintenance(event)">Benefit Terbit</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="underMaintenance(event)">Author</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'about-us' ? 'active' : ''}}">
                        <a href="{{ url('/about-us') }}">Tentang Penerbit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
