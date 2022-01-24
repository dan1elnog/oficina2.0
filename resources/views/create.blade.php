@extends('templates.template')
<title> Cadastrar </title>
@section('content')
    <h1 class="text-center">Cadastro<hr>
    <div class="col-8 m-auto">
    @if($errors->any())
        <div >
            <ul class="alert-danger mt-4 mb-4 p-2 text-center h6">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form name="formBud" id="formBud" method="post" action="{{url('/store')}}">
            @csrf
            <input class=" form-control"type="text" name="client" id="client" 
            size=50 placeholder="Nome do Cliente"><br>
            <input class=" form-control"type="text" name="seller" id="seller" 
            size=50 placeholder="Nome de Vendedor"><br>
            <input class="form-control" type="text" name="description" id="description" 
            size=40 placeholder="Descrição do Produto/Serviço"><br>
            <input class="form-control" type="text" name="value" id="value" size=10 
            placeholder="Valor do Produto/Serviço"><br>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            <a class="btn btn-outline-danger" href="{{'budget'}}">Cancelar</a>
        </form>
    </div>
@endsection