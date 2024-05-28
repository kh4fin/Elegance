<header class="header" data-header>
  <div class="container">
    @foreach ($header as $item)
    <a href="/" class="logo">{{ $item->companny_name }}</a>
    @endforeach

    <nav class="navbar container" data-navbar>
      <ul class="navbar-list">
        <li>
          <a href="/#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="/#about" class="navbar-link" data-nav-link>About Us</a>
        </li>

        <li>
          <a href="/#project" class="navbar-link" data-nav-link>Project</a>
        </li>

        <li>
          <a href="/#contact" class="navbar-link" data-nav-link
              >Contact Us</a>
        </li>

        <li>
          <a href="/products" class="btn btn-primary">Get Started</a>
        </li>
      </ul>
    </nav>

    <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
      <ion-icon name="menu-outline" class="open"></ion-icon>
      <ion-icon name="close-outline" class="close"></ion-icon>
    </button>
  </div>
</header>