@extends('templates.template')
<title>Editar</title>
@section('content')
    <h1 class="text-center">Editar<hr>
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
            <form name="formEdi" id="formEdi" method="post" action="{{route('budget.update', $budget->id)}}">
                @method('PUT')
            @csrf
            <input class=" form-control"type="text" name="client" id="client" 
            size=50 placeholder="Nome do Cliente" value="{{$budget->client}}"><br>
            <input class=" form-control"type="text" name="seller" id="seller" 
            size=50 placeholder="Nome de Vendedor" value="{{$budget->seller}}"><br>
            <input class="form-control" type="text" name="description" id="description" 
            size=40 placeholder="Descrição do Produto/Serviço" value="{{$budget->description}}"><br>
            <input class="form-control" type="text" name="value" id="value" size=10 
            placeholder="Valor do Produto/Serviço" value="{{$budget->value}}"><br>
            <button type="submit" class="btn btn-outline-success">Editar</button>
            <a class="btn btn-outline-danger" href="{{route('budget.index')}}">Cancelar</a>
        </form>
    </div>
@endsection