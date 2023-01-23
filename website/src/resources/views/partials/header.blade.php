<header class="container">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portfolio Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link @if(\Request::is('/')) active @endif " aria-current="page" href="{{ route('index') }}">Home</a>
                    <a class="nav-link @if(\Request::is('projects')) active @endif " href="{{ route('projects.index') }}">Projects</a>
                    <a class="nav-link @if(\Request::is('about')) active @endif " href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</header>