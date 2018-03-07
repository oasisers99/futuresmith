@php
if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 1;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return 'active font-weight-bold underline';
    }
}
@endphp

<!--<link rel="stylesheet" href="{{ mix('/css/menu/style.css') }}">-->
<div class="row bg-theme-gray">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-theme-gray">
                <a class="navbar-brand text-uppercase font-weight-bold" href="/">Future Smiths</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <span class="navbar-nav mr-auto"></span>
                    <ul class="navbar-nav">
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link {!! classActivePath('front.aboutus') !!}" href="{{ route('front.aboutus') }}">About <span class="sr-only">(current)</span></a>
                        </li>

                    @if (Auth::check())
                        @if (Session::get("userCreatedTribesCount") > 0)
                            @php
                                $tribeId = Session::get("userTribes")[0]->tribe_id;
                            @endphp
                            <li class="nav-item pl-2 pr-2">
                                <a class="nav-link  {!! classActivePath('tribe.main') !!}" href="{{ route('tribe.main', ['tribe_id' => $tribeId]) }}">Your Tribe </a>
                            </li>
                        @else
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link  {!! classActivePath('tribe.createForm') !!}" href="{{ route('tribe.createForm') }}">Tribes</a>
                        </li>
                        @endif
                    @elseif (!Auth::check())
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link  {!! classActivePath('tribe.createForm') !!}" href="{{ route('tribe.createForm') }}">Tribes</a>
                        </li>
                    @endif
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link  {!! classActivePath('front.projectSearchPage') !!}" href="{{ route('front.projectSearchPage') }}">Projects</a>
                        </li>
                    @if (Auth::check())
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link  {!! classActivePath('user.profile-page') !!}" href="{{ route('user.profile-page') }}">Profile</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a class="btn btn-outline-dark white-hover  {!! classActivePath('auth.logout') !!}" href="{{ route('auth.logout') }}">Log out</a>
                        </li>
                    @else
                        <li class="nav-item pl-2 pr-2">
                            <a class="btn btn-outline-dark white-hover  {!! classActivePath('auth.loginForm') !!}" href="{{ route('auth.loginForm') }}"><b>Sign Up</b> or Log In</a>
                        </li>
                    @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
