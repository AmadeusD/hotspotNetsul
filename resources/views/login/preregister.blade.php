@extends("login.base")

@section("style")

    <style>
        #container-formas{
            margin-top: 50px;
        }
        #mar-bottom{
            margin-bottom: 10px;
        }
    </style>

@endsection

@section("content")

    <main>
        <div id="container-formas" class="row">
            <div class="container">
                <div class="col l12 m12 s12" >
                    <div id="mar-bottom" class="col s12 m12 l12">
                        <a href="#" class="btn waves-light waves-effect col s12 m4 l4 offset-l4">Sou cliente Netsul</a>
                    </div>
                    <div class="col s12 m12 l12">
                        <a href="{{URL::route('CommonRegister')}}" class="btn waves-light waves-effect col s12 m4 l4 offset-l4">Não sou cliente Netsul</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection