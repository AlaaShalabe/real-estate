<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>
            <a class="navbar-item" href="#">
                Settings
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Posts
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('post.create') }}">
                        Create new post
                    </a>
                    <a class="navbar-item" href="{{ route('post.index') }}">
                        view all posts
                    </a>

                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Categories
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('categories.create') }}">
                        Create new Category
                    </a>
                    <a class="navbar-item" href="{{ route('categories.index') }}">
                        All Categories
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <div class="navbar-item">Hello {{ Auth::user()->name }}</div>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="button is-light">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
