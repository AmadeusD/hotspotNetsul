@extends('login/base')

@section('content')
<main>
	<div class="row">
		<form class="col s12 m12" action="#">
			<div class="row">
				<div class="col s12 m12 l12">
					<div class="input-field col s12 m4 offset-m4 l4 offset-l4 center">
						<img src="{{ asset('/img/logo_netsul.png')}}" class="mdi-image-lens" style="height: 100px; width: 120px;">
					</div>
				</div>
				<div class="col s12 m12 l12">
					<div class="input-field col s12 m4 offset-m4 l4 offset-l4 center">
						<input type="text" id="user" class="validate">
						<label for="user">Usuário</label>
					</div>
				</div>
				<div class="col s12 m12 l12 ">
					<div class="input-field col s12 m4 offset-m4 l4 offset-l4 center">
						<input type="password" id="pass" class="validate">
						<label for="pass">Senha</label>
					</div>
				</div>
				<div class="col s12 m12 l12 ">
					<div class="input-field col s12 m4 offset-m4 l4 offset-l4 center">
						<a href="#" class="btn waves-green waves-effect">Login</a>
						<a href="{{URL::route('Cadastro')}}" class="btn waves-green waves-effect">Cadastrar</a>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<a href="#" class="btn waves-red waves-effect col s12 m4 l4 offset-l4">Google</a>
				</div>
				<div class="col s12 m12 l12">
					<a href="#" class="btn waves-red waves-effect col s12 m4 l4 offset-l4">Facebook</a>
				</div>
				<div class="col s12 m12 l12">
					<a href="#" class="btn waves-red waves-effect col s12 m4 l4 offset-l4">Twitter</a>
				</div>
			</div>
		</form>
	</div>
</main>
@endsection
