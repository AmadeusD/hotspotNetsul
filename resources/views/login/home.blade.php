@extends('login/base')

@section("style")
    <style>
        #facebook{
            background-color: #3A5795;
            margin-bottom: 10px;
        }
        #google{
            background-image: -moz-linear-gradient(center top , #DD4B39, #D14836);
            margin-bottom: 10px;
            margin-top: 10px;
        }
        #twitter{
            background-color: #55ACEE;
        }

    </style>

@endsection

@section('content')
    <main>
        <div class="row">
            <form class="col s12 m12 l12" action="#">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m4 offset-m4 l4 offset-l4 center">
                            <img src="{{ asset('/img/logo_netsul.png')}}" class="mdi-image-lens" style="height: 100px; width: 120px;">
                        </div>
                    </div>
                    @if((count($errors)>0))
                        <div class="col s12 m12 l12">
                            <div class="row">
                                <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">Erro!</span>
                                        @foreach($errors->all() as $erro)
                                            <p>
                                            <li>{{$erro}}</li>
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
                            <a href="{{URL::route('Register')}}" class="btn waves-green waves-effect">Cadastrar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m4 offset-m4 l4 offset-l4 center">
                            <div class="card transparent darken-1">
                                <div class="card-content white-text">
                                    Conecte-se usando uma rede social
                                    <div class="col s12 m12 l12">
                                        <a href="#" class="btn waves-light waves-effect col s12 m12 l12 " id="google"><i class="fa fa-google-plus-square"></i> Google</a>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <a href="{{URL::route('FacebookRedirect')}}" class="btn waves-light waves-effect col s12 m12 l12" id="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <a href="#" class="btn waves-light waves-effect col s12 m12 l12" id="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
