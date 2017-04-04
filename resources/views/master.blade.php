<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    @yield('navbar')
    <div class="navbar-header">
      <a class="navbar-brand" href="/search">B2BPortal</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/search">Search</a></li>
      <li><a href="/organisation">Company</a></li>
      <li><a href="/location">Location</a></li>
      <li><a href="/nameContact">Named Contact</a></li>
      <li><a href="/register">Register</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
     </ul>
  </div>
</nav>

  @section('info')
     <!-- <p>This is appended to the master infobar.</p> -->
            
  @show
  
<div class="container">
  @yield('content')
</div>

<div class="container">
  @yield('form')
</div>

</body>
</html>
