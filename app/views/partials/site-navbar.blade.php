<div class="container">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand glyphicon glyphicon-home" href="/index"> Rover Sleepover</a> 
        </div>
        <ul class="nav navbar-nav navbar-right">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="/search"> Browse Hosts</a>
              </li>
              <li>
                <a href="/users/create-rover"> Register Rover</a>
              </li>
              <li>
                <a href="/users/create-host"> Become a Host</a>
              </li>
              @if (Auth::check())
                <li>
                  <a href="/logout"> Logout</a>
                </li>
              @else
                <li>
                  <a href="/login"> Login</a>
                </li>
              @endif
            </ul>
          </div>
        </ul>

        <!-- <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input placeholder="search posts" type="text" class="form-control"/>
          </div> 
            <button type="submit" class="btn btn-default">Submit</button>
        </form> -->


        <!-- <ul class="nav navbar-nav navbar-left">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="/index"> Home</a>
              </li>
            </ul>
          </div>
        </ul> -->
      </nav>