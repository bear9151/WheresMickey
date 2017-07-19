<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hero-logo" href="/">{{config('app.name', "Where's Mickey?")}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="navbar-link" href="/about">About</a></li>
                <li><a class="navbar-link" href="/characters">Characters</a></li>
                <li><a class="navbar-link" href="/places">Places</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>