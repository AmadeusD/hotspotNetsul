<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Socialize;

use Illuminate\Http\Request;

class LoginFacebookController extends Controller {

    /**
     * @return mixed
     */
    public function FacebookRedirect(){ //Redireciona para o login no face
        return Socialize::with('facebook')->redirect();
    }

    /**
     * Recebe callback do Facebook
     *
     * Callback: objeto. Variáveis acesso: $obj->var.
     * Variáveis úteis: id; name; email; avatar;
     *
     **/
    public function FacebookRegister(){ //recebe callback do facebook para registro
        $userF = Socialize::with('facebook')->user();
        $user = new \App\Model\User;
        $user->user = $userF->email;
        $user->nome = $userF->name;
        $user->email = $userF->email;
        $user->password = $userF->id;
        $user->provider_id = $userF->id;
        session(['user_register' => $user]);
        return view('login/facebook/cadastro/index')->with('user', $user);
    }


    //Funções de registro pelo Facebook
    /**
     * @param Request $request
     * @return $this|\Illuminate\View\View
     */
    public function FacebookRegisterPost(Request $request){ //Recebe o post do formulário de cadastro com o face
        $method = $request->method();
        if($method != "POST"){
            \Redirect::route('Login');
        } else {
            $validator = Validator::make($request->all(), [
                'cpf_cnpj'=>'required|unique:users',
                'email'=>'required|unique:users|email',
                'nacionalidade'=>'required',
                'tel'=>'required',
            ]);
            if($validator->fails()){
                return  \Redirect::route('Login')->withErrors($validator->errors()->all())->withInput();
            } else {
                $user = session('user_register');
                $user->cpf_cnpj = $request->get('cpf_cnpj');
                $user->nacionalidade = $request->get('nacionalidade');
                $user->telefone = $request->get('tel');
                $user->provider = "Facebook";
                if($user->save()){
                   return view("login.facebook.cadastro.pin");
                }
            }



        }

    }

    public function FacebookRegisterCheckMethod(){

    }





}
