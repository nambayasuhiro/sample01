<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
