<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            Calisthenics Blog
        </a>

        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('posts.index') }}">Articoli</a>
            <a class="nav-link" href="{{ route('posts.create') }}">Nuovo articolo</a>
        </div>
    </div>
</nav>