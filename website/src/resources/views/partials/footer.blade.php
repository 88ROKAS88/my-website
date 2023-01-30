<footer class="container p-3">
    The website is under construction.
    <br />
    Visit websites <a href="http://web-dev-rm.com/spa/">SPA version</a>.
    <br />
    Website is using only essential cookies. Here u can read
    <a href="{{ route('cookiepolicy') }}">Cookie Policy</a>.
    @guest
    <br />
    <a class="text-body" href="{{ route('login') }}">Log in</a>
    @endguest
    @auth
    <br />
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link text-body">Log out</button>
    </form>
    @endauth
</footer>