<nav class="navbar navbar-expand-lg bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('images/readers_magnet.png')}}" height="50" width="50" alt="" srcset="">
        <span class="mt-2">Royalty Calculation</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request()->is('/') ?  'active' : '' }} " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('authors') ? 'active' : ''}} " href="{{route('author.index')}}">Authors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('books') ? 'active' : ''}} " href="{{route('book.index')}}">Books</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Transactions
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('pod.index')}}">POD</a></li>
                <li><a class="dropdown-item" href="{{route('ebook.index')}}">Ebook</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->getFullName()}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('user.profile')}}">Profile</a></li>
              <li><a class="dropdown-item" href="{{route('user.edit-password')}}">Change Password</a></li>
              <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{route('logout')}}" method="post" class="my-0">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
