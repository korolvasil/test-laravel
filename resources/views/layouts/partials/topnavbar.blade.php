<div class="top-navbar"{!! !Auth::check() ? 'style="padding-left: 10px"' : '' !!}>
    <div class="brand"><a href="{{ route('index') }}"><span>NAEPS</span></a></span></div>


        @if(!Auth::check())
            @if(Route::currentRouteName() == 'auth')
                <div class="auth-toggler flex">
                        <label for="login">Log in <i data-feather="log-in"></i></label>
                        <label for="register">Join us <i data-feather="user-plus"></i></label>
                </div>
            @else
                <div class="auth-toggler">
                    <a href="{{ route('auth') }}"><span>Login</span><i data-feather="log-in"></i></a>
                </div>
            @endif
        @else
            <div class="auth-toggler">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span>Logout</span><i data-feather="log-out"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif


</div>