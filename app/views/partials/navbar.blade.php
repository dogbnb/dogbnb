
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<!-- <div class="extras">
						<ul>
							<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
							</li>
			        		<li><a href="page-login.html">Login</a></li>
			        	</ul>
					</div> -->
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html"><header>Rover Sleepover</header></a></li>
						<li class="active">
							<a href="/index">Home</a>
						</li>
						<li>
							<a href="/search">Browse Hosts</a>
						</li>
						<li>
							<a href="/users/create-rover">Sign Up Rover</a>
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
		
