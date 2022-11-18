<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">
      <br>
    <p><strong><i>Joy Bangla Remittance</i></strong></p>
    </a>

      <nav class="navbar bg-light">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
        <ul class="nav justify-content-end">
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('logout')}}">Logout</a>
        </li></button> 
        </ul>
  </div>
</nav>