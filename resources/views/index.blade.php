@extends('templates.template')

@section('content')
    <h1 class="text-center">Oficina 2.0</h1><hr>
    <div class="text-center mt-3 mb-4">
        <a class="btn btn-outline-success" href="{{route('budget.create')}}"> Cadastrar </a>
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-hover text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Vendedor:</th>
                <th scope="col">Cliente:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Valor:</th>
                <th scope="col">Data de Criação:</th>
                <th scope="col">Opções:</th>
                </tr>
            </thead>
            <tbody> 
            @foreach($budgets as $budget)
                    <tr>
                        <td>{{$budget->id}}</td>
                        <td>{{$budget->seller}}</td>
                        <td>{{$budget->client}}</td>
                        <td>{{$budget->description}}</td>
                        <td>{{$budget->value}}</td>
                        <td>{{$budget->created_at}}</td>
                        <td>
                            <a href="{{route('budget.show', $budget->id)}}">
                            <button type="button" class="btn btn-outline-info">
                                Ver 
                            </button>
                            </a>
                            <a href="{{route('budget.edit', $budget->id)}}">
                            <button type="button" class="btn btn-outline-primary">
                                Editar
                            </button>
                            </a>
                            <form action="{{route('budget.destroy', $budget->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a>
                                    <button type="submit" class="btn btn-outline-danger">
                                        Deletar
                                    </button>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach  
            </tbody>
        </table>
    </div>

@endsection