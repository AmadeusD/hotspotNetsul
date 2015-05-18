@extends("login.base")

@section("style")
    <style>

    </style>
@endsection

@section("content")

    <main>
        <div class="row">
            <div class="container">
                <div class="col s12 m12 l12">
                    <h5 class="text-darken-4 white-text center">Confirmação de cadastro</h5>
                    <div class="col s12 m12 l4 offset-l4">
                        <form action="#">
                            <div class="input-field">
                                <input type="text" name="pin" id="pin" title="pin">
                                <label for="pin">Insira o pin</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection