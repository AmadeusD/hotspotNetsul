<?php
/**
 * Created by PhpStorm.
 * User: Amadeus
 * Date: 18/05/2015
 * Time: 09:24
 */

namespace App\Services;

use App\Model as Model;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;



class Register {

    public static function  verifyMethod(Request $request, $ruleMethod, $routeRedirect = "Login"){
        if(Method::verifyMethod($request->method(), $ruleMethod)){
            return \Redirect::route($routeRedirect);
        }
        return true;
    }

    /**
     * Métodos referentes ao usuário Facebook não cliente Netsul
     */
    public static function validationDataRegisterFacebook(Request $request, $routeRedirect = "Login"){
        $validator = self::validatorFacebook($request->all());
        if($validator->fails()){
            return \Redirect::route($routeRedirect)->withErrors($validator->errors()->all());
        }
        return true;
    }
    public static function storeUserFacebook(Request $data, $viewRedirect){
        if(self::storeUserFacebookBase($data->all())){
            return view($viewRedirect);
        } else {
            return false;
        }
    }

    public static function validatorFacebook($data){
        return Validator::make($data, [
            'name'          => 'required',
            'email'         => 'required|unique:users',
            'cpf_cnpj'      => 'required|unique:users',
            'nacionalidade' => 'required',
            'tel'           => 'required',
            'provider_id'   => 'required|unique:users',
            'provider'      => 'required',
        ]);
    }

    private static function storeUserFacebookBase($data){
        $user                = new Model\UserFacebook;
        $user->user          = $data['email'];
        $user->password      = $data['provider_id'];
        $user->nome          = $data['name'];
        $user->email         = $data['email'];
        $user->cpf_cnpj      = $data['cpf_cnpj'];
        $user->nacionalidade = $data['nacionalidade'];
        $user->telefone      = $data['tel'];
        $user->provider_id   = $data['provider_id'];
        $user->provider      = $data['provider'];
        if($user->save())
            return true;
        return false;
    }



    /**
     * Métodos referentes ao usuário comum não cliente Netsul
     */
    public static function validationDataRegisterCommon(Request $request, $routeRedirect = "Login"){
        $validator = self::validatorCommon($request->all());
        if($validator->fails()){
            return \Redirect::route($routeRedirect)->withErrors($validator->errors()->all());
        }
        return true;
    }
    public static function storeUserCommon(Request $data, $viewRedirect){
        if(self::storeUserCommonBase($data->all())){
            return view($viewRedirect);
        } else {
            return false;
        }
    }

    private static function storeUserCommonBase($data){
        $user                = new Model\User;
        $user->user          = $data['user'];
        $user->password      = $data['pass'];
        $user->nome          = $data['name'];
        $user->email         = $data['email'];
        $user->cpf_cnpj      = $data['cpf_cnpj'];
        $user->nacionalidade = $data['nacionalidade'];
        $user->telefone      = $data['tel'];
        $user->provider_id   = $data['provider_id'];
        $user->provider      = $data['provider'];
        if($user->save())
            return true;
        return false;
    }
    private static function validatorCommon($data){
        return Validator::make($data, [
            'user'          => 'required|unique:users',
            'pass'          => 'required',
            'name'          => 'required',
            'email'         => 'required|unique:users',
            'cpf_cnpj'      => 'required|unique:users',
            'nacionalidade' => 'required',
            'tel'           => 'required',
            'provider_id'   => 'required|unique:users',
            'provider'      => 'required',
        ]);
    }
}