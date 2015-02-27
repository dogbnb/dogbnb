
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="/index"><header>Rover Sleepover</header></a></li>
						<li>
							<a href="/search">Browse Hosts</a>
						</li>
						<li>
							<a href="/users/create-rover">Sign Up Rover!</a>
						</li>
						<li>
							<a href="/users/create-host">Become a Host</a>
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
				</nav>
			</div>
		</div>
		
