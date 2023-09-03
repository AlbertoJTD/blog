<header>
  <h1 class="text-xl">Courses</h1>
  <nav>
    <ul>
      <li>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      </li>
      <li>
        <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Courses</a>
      </li>
      <li>
        <a href="{{ route('about_us') }}" class="{{ request()->routeIs('about_us') ? 'active' : '' }}">About us</a>
      </li>
      <li>
        <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? 'active' : '' }}">Contact</a>
      </li>
    </ul>
  </nav>
</header>