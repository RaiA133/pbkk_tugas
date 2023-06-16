<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
      <a class="navbar-brand" href="/">Rai-Web</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title == "About") ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title == "Blogs") ? 'active' : '' }}" href="/blogs">Blog</a>
          <a class="nav-link {{ ($title == "Dashboard") ? 'active' : '' }}" href="/dashboard">Admin</a>
        </div>
      </div>
    </div>
  </nav>