<div class="navbar navbar-expand sticky-top navbar-light" style="background-color: #e3f2fd;">
    <img src="{{ asset('assets/logo.jpg') }}">
    <p class="navbar-brand m-2" href="/">ReadUp</p>
    <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a href="/">
                    <button type="button" class="btn btn-primary">Dashboard</button>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/hot">
                    <button type="button" class="btn btn-primary">Hot Manga</button>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/genre">
                    <button type="button" class="btn btn-primary">Genre</button>
                </a>
            </li>
        </ul>
    </div>
        
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
        @if (Auth::check())
        <ul class="navbar-nav">
            <li class="nav-item mx-1">
                <a href="/logout">
                    <button type="button" class="btn btn-primary">Logout</button>
                </a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item mx-1">
                <a href="/login">
                    <button type="button" class="btn btn-primary">Login</button>
                </a>
            </li>
            <li class="nav-item mx-1">
                <a href="/register">
                    <button type="button" class="btn btn-primary">Register</button>
                </a>
            </li>
        </ul>
        @endif
    </div>
</div>