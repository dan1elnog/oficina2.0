@extends('templates.template')
<title>Deletar</title>
@section('content')
    <h1 class="text-center mt-4">Orçamento deletado com sucesso!<hr>
    <div class="col-8 m-auto">
        <a class="btn btn-outline-success" href="{{route('budget.index')}}">Voltar</a>
    </div>
@endsection