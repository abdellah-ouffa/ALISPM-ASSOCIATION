<header id="header" class="header-area header-one">
    <div class="topbar-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 text-left">
                    <div class="topbar-list">
                        <div class="single-topbar">
                            <p> <span class="fa fa-map-marker"></span>{{ setting('site.company_address') }}</p>
                        </div>
                        <div class="single-topbar">
                            <p> <span class="fa fa-envelope"></span>{{ setting('site.company_email') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="topbar-social">
                        <a href="{{ setting('site.company_facebook') }}" target="_blank" class="fa fa-facebook"></a>
                        <a href="{{ setting('site.company_linkedin') }}" target="_blank" class="fa fa-linkedin"></a>
                        <a href="{{ setting('site.company_youtube') }}" target="_blank" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-logo">
                        <a href="{{ route('site.home') }}"><img src="{{ asset('frontend/asset/img/lgo.png') }}" style="position: absolute;z-index: 99;width: 40%;top: -35%;" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cssmenu" id="cssmenu">
                        <ul class="menu">
                            <li>
                                <a href="{{ route('site.home') }}">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="{{ route('site.projects') }}">Project</a>
                            </li>
                            <li>
                                <a href="{{ route('site.contact') }}">Contact</a>
                            </li>

                            <li>
                                <a href="{{ route('site.hiring') }}">Hiring</a>
                            </li>
                            <li>
                                <a class="admin-link" href="{{ url('admin') }}">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>