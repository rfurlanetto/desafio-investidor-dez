<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{

    protected $request;
    protected $noticia;

    public function __construct(Request $request, Noticia $noticia)
    {
        $this->request = $request;
        $this->noticia = $noticia;
    }

    public function index()
    {
        return view('body/crud-noticia');
    }

    public function show($slug)
    {
        return view('body.show-noticia', ['noticia' => $this->noticia->where('slug', $slug)->first()]);
    }

    public function store()
    {
        $objRequest = $this->request->all();

        DB::beginTransaction();
        try {
            $this->noticia->titulo = $objRequest['title'];
            $this->noticia->slug = Str::slug($objRequest['title']);
            $this->noticia->noticia = $objRequest['body'];
            $this->noticia->save();
    
            DB::commit();
            return view('body.crud-noticia', ['success' => true, 'mensagem' => 'Noticia Cadastrada com Sucesso!!']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return view('body.crud-noticia', ['erro' => true, 'mensagem' => 'Erro ao cadastrar Noticia, entre em contato com o administrador!!']);
        }
    }

    public function list()
    {
        $noticias = $this->noticia->all();
        return view('body/list-noticia', ['noticias' => $noticias]);
    }
}
