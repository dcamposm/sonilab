<header>
	<div class="header"> 
		<img src="{!! asset('imgs/sonilab_logo.png') !!}" alt="Sonilab Studios" class="logo">
		<div class="menu">
			<div class="nav">
				<a href='#'>Projecte</a>
				<a href='{{url('personal/index')}}'>Personal</a>
				<a href='#'>Calendari</a>
				<a href='#'>Registres</a>
				<a href='{{url('usuari/index')}}'>Usuaris</a>
				<a href='#'>Perfil</a>
			</div>
			<a href='{{url ('logout')}}'>
				<img src="{!! asset('imgs/logout.png') !!}" alt="Sonilab Studios" class="logout">
			</a>
		</div>
	</div>
</header>
