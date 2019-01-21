@extends('layouts.master')
@section('content')
<div class="center">
	<h1>LOGIN</h1>
	<div class="spacing_content">
		<!--php echo constant('URL');?>usuari/login-->
		<form class="forms" action="{{ url('/usuari') }}" method="post" enctype="multipart/form-data">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
			<div>
				<div>
					<p>Username<p>
					<input type='text' name='alias'/>
				</div>

				<div>
					<p>Password<p>
                                        <input type='password' name='pass'/>
				</div>
				<label><input type="checkbox" id="check" value="rem"> Remember username</label>
			</div>
			<div>
				<!--php echo constant('URL');?>pages/rem-->
				<a class="btn btn-primary" href='#'>Forgotten your username or password?</a>
			</div>
			<button type="submit">Click</button>
		</form>
	</div>
</div>

@stop