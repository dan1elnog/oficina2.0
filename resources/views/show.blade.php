@extends('templates.template')
<title>Visualizar</title>
@section('content')
    <h1 class="text-center">Visualização</h1><hr>
    <ul class=" btn list-group">
        <li class="list-group-item active">Detalhes do Orçamento:</li>
        <li class="list-group-item">Id do Orçamento: {{$budget->id}}</li>
        <li class="list-group-item">Nome do Cliente: {{$budget->client}}</li>
        <li class="list-group-item">Nome do Vendedor: {{$budget->seller}}</li>
        <li class="list-group-item">Descriçaõ do Produto/Serviço: {{$budget->description}}</li>
        <li class="list-group-item">Valor do Orçamento: {{$budget->value}}</li>
        <li class="list-group-item">Data e Hora da Criação do Orçamento: {{$budget->created_at}}</li>
    </ul>
    <h2 class="text-center">
        <a class="text-center btn btn-outline-info mt-2" href="{{route('budget.index')}}">Voltar</a>
    <h2>
@endsection