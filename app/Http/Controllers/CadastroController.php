<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CadastroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login/register/index');

	}

	/**
	 * Cadastro do usuário comum, sem vínculo com a empresa ou qualquer informação do tipo
	 * 
	 * Receber via post as informações do formulário da página de cadastro da view /view/login/cadastro/index
	 * 
	 * @return Response
	 */
	public function storeUserCommon(){
		
	}



}
