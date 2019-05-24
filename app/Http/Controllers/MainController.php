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
        $query = $client->post('http://localhost:3000/api/v1/customer/patner/signin', [
            'form_params'=>[
                'email'=>$request->email,
                'password'=>$request->password
            ]
        ]);
        $response = $query->getBody()->getContents();
        $data = json_decode($response);
        if ($data->status == true){
            session(['authentication_token'=>$data->message->authentication_token]);
            session(['phone'=>$data->message->role_id]);
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

    public function customerCreate(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/patner/customer/new', [
            'form_params'=>[
                'name'=>$request->name,
                'second_name'=>$request->second_name,
                'cni'=>$request->cni,
                'phone'=>$request->phone,
                'adresse'=>$request->adresse,
                'sexe'=>$request->sexe
            ]
        ]);
        $result = $query->getBody()->getContents();
        $data = json_decode($result);
        if ($data->status == true){
            return redirect()->action('MainController@newCustomer')->with('success', 'Utilisateur cree avec success');
        }else {
            return view('main.new')->with('error', 'Impossible de creer cet utilisateur');
        }
    }

    public function credit(){

        return view('main.credit');

    }

    public function creditGo(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/patner/customer/credit', [
            'form_params'=>[
                'phone'=>$request->phone,
                'amount'=>$request->amount
            ]
        ]);
        $result = $query->getBody()->getContents();
        $data = json_decode($result);
        if ($data->status == true){
            return redirect()->action('MainController@credit')->with('success', 'Utilisateur '.$request->phone.' vient d etre credité de '.$request->amount.' F CFA');
        }else {
            return view('main.credit')->with('error', 'Impossible de crediter ce compte');
        }
    }

    public function debit(){

        return view('main.debit');

    }

    public function debitGo(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/patner/debit', [
            'form_params'=>[
                'phone'=>$request->phone,
                'amount'=>$request->amount
            ]
        ]);
        $result = $query->getBody()->getContents();
        $data = json_decode($result);
        if ($data->status == true){
            return redirect()->action('MainController@debit')->with('success', 'Utilisateur '.$request->phone.' vient d etre debité de '.$request->amount.' F CFA');
        }else {
            return view('main.debit')->with('error', 'Impossible de debiter ce compte');
        }
    }

    public function activer(){

        return view('main.activer');

    }

    public function activer_step_2(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/patner/activer/search', [
            'form_params'=>[
                'phone'=>$request->phone
            ]
        ]);
        $result = $query->getBody()->getContents();
        $data = json_decode($result);
        if ($data->status == true){
            return redirect()->action('MainController@activer_step_2')->with('data', $data->message);
        }else {
            return view('main.activer')->with('error', 'Impossible de trouver ce numero');
        }

    }

    public function activerGo(Request $request){
        $client = new Client();
        $query = $client->post('http://localhost:3000/api/v1/customer/partner/activate/validate', [
            'form_params'=>[
                'phone'=>$request->phone,
                'authentication_token'=>$request->authentication_token,
                'motif'=>$request->motif
            ]
        ]);
        $result = $query->getBody()->getContents();
        $data = json_decode($result);
        if ($data->status == true){
            return redirect()->action('MainController@activer')->with('success', "Le compte ".$request->phone." a été correctement activé.");
        }else {
            view('main.activer')->with('error', 'Impossible d activer ce compte.');
        }
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

    public function logs(Request $request){
        $client = new Client();
        $query = $client->get('http://localhost:3000/api/v1/customer/partner/journal');
        $response = $query->getBody()->getContents();
        $data = json_decode($response);

        return view('main.journal')->with(['data'=>$data->message]);

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
