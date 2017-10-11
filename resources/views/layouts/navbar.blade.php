    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{!! url('/home') !!}">Home Page</a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="{!! url('/dashboard') !!}">Dashboard</a></li> <!-- class="active" -->
            
          </ul>

          @if(session()->has('user'))
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/setting') }}">Setting</a></li>
                <li><p class="navbar-brand"><small>Welcome, {!! session()->get('user') !!}</small></p></li>
                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
              </ul>
          @else
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{!! url('/register') !!}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{!! url('/login') !!}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          @endif
      </div>
      </div>
    </nav>