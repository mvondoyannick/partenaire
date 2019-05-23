<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MainController extends Controller
{
    //user authentication
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login(Request $request){
        if ( $request->session()->exists('authentication_token')){
            return redirect()->action('MainController@index');
        }else {
            return view('main.login');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function authPartner(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/auth/signin', [
            'form_params'=>[
                'email'=>$request->email,
                'password'=>$request->password
            ]
        ]);
        $response = $query->getBody()->getContents();
        $data = json_decode($response);
        if ($data->status == true){
            session(['authentication_token'=>$data->message->authentication]);
            session(['phone'=>$data->message->phone]);
            session(['name'=>$data->message->name]);
            session(['prenom'=>$data->message->prenom]);
            session(['email'=>$data->message->email]);
            return view('main.main')->with('success', 'Connecté(e) en tant que '.$data->message->email);
        }else{
            return view('main.login')->with('error', 'Utilisateur inconnu');
        }

    }

    public function index(Request $request){
        //main view when logged in
        return view('main.main');
    }

    public function newCustomer(){

        return view('main.new');

    }

    public function credit(){

        return view('main.credit');

    }

    public function debit(){

        return view('main.debit');

    }

    public function activer(){

        return view('main.activer');

    }

    public function bloquer(){

        return view('main.bloquer');

    }

    public function debloquer(){

        return view('main.debloquer');

    }

    public function history(){

        return view('main.history');

    }

    public function logs(){

        return view('main.journal');

    }

    public function search(){

        return view('main.search');
    }

    public function admin(){

        return view('admin.index');
    }

    public function agences(){

        return view('admin.agences');
    }

    public function users(){

        return view('admin.users');
    }
}
