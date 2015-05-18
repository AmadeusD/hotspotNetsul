@extends('login.base')

@section('style')

    <style>
    </style>

@endsection

@section('content')

    <main>
        <!-- Modal confirm telefone pin -->
        <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Confirmação de telefone</h4>
                <p>Será enviado um número de quatro dígitos por SMS ao número <span id="tel-modal"></span>. Todas as informações estão corretas?</p>
                <a href="#!" id="submit" class="modal-action waves-effect waves-red btn-flat ">Confirmar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
            </div>
        </div>
        <!-- End modal confirm telefone pin -->
        <div class="row">
            <div class="container">
                <div class="col s12 m12 l12">
                    <h5 class="text-darken-4 white-text center">Cadastro</h5>
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <form id="form-cad" method="post" action="{{URL::route('CommonRegister')}}">
                                <div class="input-field">
                                    <input type="text" class="validate" id="name" name="name">
                                    <label for="name"><i class="mdi-social-person"></i>Nome</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="validate" id="email" name="email">
                                    <label for="email"><i class="mdi-communication-email"></i>Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="validate" id="user" name="user">
                                    <label for="user"><i class="mdi-action-account-box"></i>Usuário</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="validate" id="pass" name="pass">
                                    <label for="pass"><i class="mdi-image-wb-irradescent"></i>Senha</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="validate" id="cpf_cnpj" name="cpf_cnpj">
                                    <label for="cpf_cnpj"><i class="mdi-action-payment"></i>CPF/CNPJ</label>
                                </div>

                                <!-- radio button - nacionalidade -->
                                <div class="input-field">
                                    <br><p class="white-text">Nacionalidade</p>
                                    <p>
                                        <input type="radio" name="nacionalidade" value="b" class="with-gap" id="brasileiro">
                                        <label for="brasileiro">Brasileiro</label>
                                    </p>
                                    <p>
                                        <input type="radio" name="nacionalidade" value="e" class="with-gap" id="estrangeiro">
                                        <label for="estrangeiro">Estrangeiro</label>
                                    </p>
                                </div>
                                <br>
                                <!-- Verificar se o cara escolheu estrangeiro, então, mostrar o campo para digitar passaporte - VERIRICAR O JAVASCRIPT PARA ISSO!!!! -->

                                <div class="input-field">
                                    <input type="tel" class="validate" id="tel" name="tel">
                                    <label for="tel"><i class="mdi-communication-phone"></i>Telefone (ddd-99999999)</label>
                                </div>

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="provider" value="Common">
                                <input type="hidden" name="provider_id" value="0">

                                <!-- button submit - form cadastro -->
                                <div class="center-align">
                                    <button id="b-submit" data-target="modal1" name="" class="btn waves-orange waves-effect"><i class="mdi-content-send right"></i>Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 m12 l6">
                            <p class="white-text">
                                Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.pMussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Clearfix -->
                <div class="clearfix"></div>
            </div>
        </div>
    </main>
@endsection

@section("script")

    <script>
        $(document).ready(function(){
            $('#b-submit').click(function(event){ //Open modal
                $('#modal1').openModal();
                var tel = $('#tel').val();
                $('#tel-modal').text(tel);
                event.preventDefault();
            });
            $('#submit').click(function(event){ //Submit form
                $('#form-cad').submit();
                $('modal1').closeModal();
                console.log('aquio');

            });
        });
    </script>

@endsection