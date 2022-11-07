<nav class="navbar navbar-expand-lg bg-white px-4 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/bright_logo.svg') }}" alt="BRIGHT Library & Knowledge" height="48">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 align-items-center">
                <a class="nav-link" href="/readingList">Bookmark</a>
                <a class="nav-link me-auto" href="/history">My History</a>

                <form action="/logout" method="POST" class="d-flex gap-3">
                    @csrf
                    <p class="my-auto">Hello, {{ Auth::user()->name }}</p>
                    @can('admin')
                        <a class="nav-link p-0" href="/admin-add">
                            <button type="button" class="btn btn-primary">AddBooks</button>
                        </a>
                    @endcan
                    <button class="btn btn-link text-reset text-decoration-none p-0" type="submit">Sign Out<i
                            class="bi bi-box-arrow-right ms-2"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>
