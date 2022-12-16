<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="home">
      <br>
    <p><strong><i>Joy Bangla Remittance</i></strong></p>
    </a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('udashboard')}}">home</a>
        </li>

    </ul>
    &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;


      <nav class="navbar bg-light">
        <div class="container-fluid">
          <form class="d-flex" action="/search" method="get" role="search">
            <input class="form-control me-2" name="search" type="search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit" value="">Search</button>
          </form>
        </div>
      </nav>
        <ul class="nav justify-content-end">
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('inbox')}}">Inbox</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="/logout">Logout</a>
        </li></button> 
        </ul>

  </div>
</nav>