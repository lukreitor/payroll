<nav id="navbar-top" class="sb-topnav navbar navbar-expand navbar-light bg-nav">
	<a href="{{ route('home') }}" class="navbar-brand">
		<img src="/images/logo.png" width="141" alt="">
	</a>
	@guest
	@else
	<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
			class="fas fa-bars"></i></button>
	@endguest
	<!-- Navbar Search-->
	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		<div class="input-group">
			<input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search"
				aria-describedby="basic-addon2" />
			<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</form>
	<!-- Navbar-->
	<ul class="navbar-nav ml-auto ml-md-0">
		@guest
		<li>
			<a class="nav-link btn btn-outline-light ml-4" href="{{ route('login') }}">Entrar</a>
		</li>
		<li>
			<a class="nav-link btn btn-outline-light ml-4" href="{{ route('register') }}">Registrar</a>
		</li>
		@else
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Página Inicial</a>
				<a class="dropdown-item" href="#">Configurações</a>
				<a class="dropdown-item" href="#">Atividade</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Sair
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>
		</li>
		@endguest
	</ul>
</nav>


@guest

@else
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion bg-purple-dark sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<div class="sb-sidenav-menu-heading">Início</div>
					<a class="nav-link" href="{{ route('home') }}">
						<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
						Dashboard
					</a>
					<div class="sb-sidenav-menu-heading">Interface</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
						aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
						Controle
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
						data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="{{ route('departments.index') }}">Departamentos</a>
							<a class="nav-link" href="{{ route('roles.index') }}">Cargos</a>
							<a class="nav-link" href="{{ route('employees.index') }}">Funcionários</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
						aria-expanded="false" aria-controls="collapsePages">
						<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
						Navegação
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
						data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
							<a class="nav-link collapsed" href="#" data-toggle="collapse"
								data-target="#pagesCollapseAuth" aria-expanded="false"
								aria-controls="pagesCollapseAuth">
								Autenticação
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
							<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
								data-parent="#sidenavAccordionPages">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="#">Trocar senha</a>
									<a class="nav-link" href=" #">Registrar outro Admin</a>
									<a class="nav-link" href="#">Atualizar Perfil</a>
								</nav>
							</div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse"
								data-target="#pagesCollapseError" aria-expanded="false"
								aria-controls="pagesCollapseError">
								Error
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
							<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
								data-parent="#sidenavAccordionPages">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="#">401 Page</a>
									<a class="nav-link" href="#">404 Page</a>
									<a class="nav-link" href="#">500 Page</a>
								</nav>
							</div>
						</nav>
					</div>
					<div class="sb-sidenav-menu-heading">Addons</div>
					<a class="nav-link" href="#">
						<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
						gráficos
					</a>
					<a class="nav-link" href="#">
						<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
						Tabelas
					</a>
				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Logado como:</div>
				{{Auth::user()->name}}
			</div>
		</nav>
	</div>
	@endguest
	<!--
<nav class="navbar navbar-expand-md navbar-light bg-warning">
	<div class="container">
		<a href="{{ route('home') }}" class="navbar-brand">
			<img src="/images/logo.png" width="141" alt="">
		</a>

		<button class="navbar-toggler " data-toggle="collapse" data-target="#nav-principal">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="nav-principal">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="{{ route('departments.index') }}" class="nav-link a-hvr">Departamentos</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('roles.index') }}" class="nav-link a-hvr">Cargos</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('employees.index') }}" class="nav-link a-hvr">Funcionários</a>
				</li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			@guest
				<li>
					<a class="nav-link btn btn-outline-light ml-4" href="{{ route('login') }}">Entrar</a>
				</li>
				<li>
					<a class="nav-link btn btn-outline-light ml-4" href="{{ route('register') }}">Registrar</a>
				</li>
			@else
				<li class="nav-item"> 
					<a class="nav-link a-hvr" href="{{ route('home') }}">Dashboard</a>
				</li>
				<li class="dropdown nav-item">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"
						aria-haspopup="true">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
			@endguest
			</ul>
		</div>
	</div>
</nav>
-->