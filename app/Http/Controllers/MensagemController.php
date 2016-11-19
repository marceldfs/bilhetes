<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Input;
use Session;
use App\Contacto;
use Nexmo;

class MensagemController extends Controller
{


    public function createMessage()
    {
        $valor = Input::get('dados');
        $teste="";

       

      foreach ($valor as $key => $value) {
            $teste .= $value;
            
        }



        $response = $this->createRequest();
       

        //Session::flash('mensagem', $teste);

        return response()->json(array('msg'=>  $resposta), 200);
    }
    public function createRequest()
    {   

        Nexmo::message()->send([
             'to' => '258820007100',
              'from' => 'Mukhero',
              'text' => 'Hello from Nexmo'
            ]);

       /*$url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
            [
              'api_key' =>  'b1afbefe',
              'api_secret' => 'a68c63a17b751d4c',
              'to' => '258820007100',
              'from' => 'Mukhero',
              'text' => 'Hello from Nexmo'
            ]
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);*/

       return  "Parece Good";    
    }


    public function seeResponse($response)
    {
         //Decode the json object you retrieved when you ran the request.
          $decoded_response = json_decode($response, true);
          $valor="";
          error_log('You sent ' . $decoded_response['message-count'] . ' messages.');

          foreach ( $decoded_response['messages'] as $message ) {
              if ($message['status'] == 0) {
                  error_log("Success " . $message['message-id']);
                  $valor = "Success ";
              } else {
                  error_log("Error {$message['status']} {$message['error-text']}");
                  $valor = "Error";
              }
          }
          return  $valor;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($id)
    {
        //
        $contactos_by_grupoID = Contacto::where('grupo_id',$id)->get();
        return \View::make('mensagem.mensagem_envio')->with('contactos',$contactos_by_grupoID);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
