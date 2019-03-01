<?php

namespace App\Http\Controllers;

use App\Models\AuthApi;
use function GuzzleHttp\json_decode;
use GuzzleHttp\Client as Guzzle;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class AlunoController extends Controller
{
    private $token;

    public function __construct()
    {
        $auth = new AuthApi;
        $this->token = $auth->getToken();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("Token: {$this->token}");
        $guzzle = new Guzzle;

        $result = $guzzle->get(URL_API.'alunos',[
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],
        ]);
        $alunos = json_decode($result->getBody())->data;
      
        $title = "Listagem de Alunos";

        return view('testes-api.alunos.index',compact('alunos','title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro novo aluno';
        return view('testes-api.alunos.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        $guzzle = new Guzzle;
        $guzzle->request('POST', URL_API . 'alunos', [
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],
            'form_params' => $dataForm,
        ]);
        //dd(json_decode($response->getBody()));
        return redirect()
            ->route('alunos.index')
            ->with('success', 'Cadastro Realizado Com Sucesso');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guzzle = new Guzzle;
        
        try{
            $response = $guzzle->request('GET', URL_API . "alunos/{$id}", [
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                ],
                "http_errors" => false,
    
            ]);
    
            $Aluno = json_decode($response->getBody())->data;
    
            $title = "Detalhes do Aluno:  {$Aluno->nome}";
    
            return view('testes-api.alunos.show', compact('aluno','title'));
            //dd(json_decode($response->getBody()));
        }catch(ClientException $e){
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }catch (RequestException $e) {
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guzzle = new Guzzle;
        
        try{
            $response = $guzzle->request('GET', URL_API . "alunos/{$id}", [
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                ],
                "http_errors" => false,
    
            ]);
    
            $Aluno = json_decode($response->getBody())->data;
    
            $title = "Editar Aluno:  {$Aluno->nome}";
    
            return view('testes-api.alunos.edit', compact('aluno','title'));
            //dd(json_decode($response->getBody()));
        }catch(ClientException $e){
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }catch (RequestException $e) {
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }
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
        $dataForm = $request->except('_token');
        $guzzle = new Guzzle;
        $response = $guzzle->request('PUT', URL_API . "alunos/{$id}", [
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],
            'form_params' => $dataForm,
        ]);
        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno alterado Com Sucesso');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guzzle = new Guzzle;
        $response = $guzzle->request('DELETE', URL_API . "alunos/{$id}", [
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],
        ]);
        return redirect()
            ->route('Alunos.index')
            ->with('success', 'Aluno Deletado Com Sucesso');
    }

    public function paginate($page)
    {
        $guzzle = new Guzzle;

        $result = $guzzle->get(URL_API."alunos?page={$page}",[
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],
        ]);
        $alunos = json_decode($result->getBody())->data;
      
        $title = "Listagem de Alunos";

        return view('testes-api.alunos.index',compact('alunos',"title"));   
    }
}
