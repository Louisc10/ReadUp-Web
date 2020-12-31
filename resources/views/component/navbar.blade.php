<div class="navbar navbar-expand sticky-top navbar-light">
    <div id="navbar-company">
        <img src="{{ asset('assets/logo.jpg') }}">
        <a class="navbar-brand m-2" href="/">ReadUp</a>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a href="/">
                    <div>Dashboard</div>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/hot">
                    <div>Hot Manga</div>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/genre">
                    <div>Genre</div>
                </a>
            </li>
        </ul>
    </div>
        
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
        @if (Auth::check())
        <ul class="navbar-nav">
            <li class="nav-item mx-1">
                <a href="/logout">
                    <div>Logout</div>
                </a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item mx-1">
                <a href="/login">
                    <div>Login</div>
                </a>
            </li>
            <li class="nav-item mx-1 separator" style="width: 1px; height: 100%; padding: 4vh 0;">
                <div style="background-color: #fff; width: 100%; height: 100%;"></div>
            </li>
            <li class="nav-item mx-1">
                <a href="/register">
                    <div>Register</div>
                </a>
            </li>
        </ul>
        @endif
    </div>
</div>
<script>
    const debounce = (fn) => {
        let frame;
        return (...params) => {
            if (frame) { 
                cancelAnimationFrame(frame);
            }

            frame = requestAnimationFrame(() => {
                fn(...params);
            });
        }
    };

    const storeScroll = () => {
        document.documentElement.dataset.scroll = window.scrollY;
    }

    document.addEventListener('scroll', debounce(storeScroll), { passive: true });

    storeScroll();

</script>