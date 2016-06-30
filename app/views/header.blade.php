
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="{{ URL::to('v_dashboard'); }}"> <i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
						<li>
							<a href="{{ URL::to('author'); }}"> <i class="glyphicon glyphicon-th"></i>
								Author
							</a>
						</li>
						<li>
							<a href="{{ URL::to('article'); }}">
								<i class="glyphicon glyphicon-fire">&nbsp;</i>
								Article
							</a>
						</li>
						<li>
							<a href="
								index.php/dosen">
								<i class="glyphicon glyphicon-user">&nbsp;</i>
								Dosen
							</a>
						</li>
						<li>
							<a href="
								index.php/user">
								<i class="glyphicon glyphicon-knight">&nbsp;</i>
								User
							</a>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="../navbar/">Default</a>
						</li>
						<li class="active">
							<a href="./">
								Static top
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li>
							<a href="../navbar-fixed-top/">Fixed top</a>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</nav>

	<!-- </div>
	<a class="navbar-brand" href="#">Selamat Datang Admin</a>
	<div class="panel-heading">Blade Template - Laravel 4.2</div>
	<div class="panel-body"></div>
	@yield('content')
</div>
</nav>
-->
