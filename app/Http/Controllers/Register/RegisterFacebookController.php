<?php namespace App\Http\Controllers\Register;

use App\Http\Requests;
use App\Model as Model;
use App\Services\Register as Register;
use Socialize;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterFacebookController extends Controller {

    /**
     * @return mixed
     */
    public function FacebookRedirect(){ //Redireciona para o login no face
        return Socialize::with('facebook')->redirect();
    }


    public function FacebookRegister(){ //recebe callback do facebook para registro
        $userF = Socialize::with('facebook')->user();
        $user['nome'] = $userF->name;
        $user['email'] = $userF->email;
        $user['provider_id'] = $userF->id;
        $user['provider'] = "Facebook";
        return view('login/facebook/cadastro/index')->with('user', $user);
    }

    public function FacebookRegisterPost(Request $request){ //Recebe o post do formulário de cadastro com o face
        $method = Register::verifyMethod($request, "post");
        if($method != true)
            return $method;
        $validation = Register::validationDataRegisterFacebook($request);
        if($validation != true)
            return $validation;
        $storeUser = Register::storeUserFacebook($request, "login.facebook.cadastro.pin");
        if($storeUser != false)
            return $storeUser;
    }
}
