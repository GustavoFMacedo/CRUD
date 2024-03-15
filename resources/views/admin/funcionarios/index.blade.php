@extends('layout.site')
   
@section('conteudo')

    <div class="container">
        <h3 class="center titulo2">Lista de funcionarios</h3>

        <div class="row titulo-colunas dentro-colunas">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Imagem</th>
                        <th>Salario</th>
                        <th>Ativo</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->data }}</td>
                        <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
                        <td>{{ $registro->salario }}</td>
                        <td>{{ $registro->ativo }}</td>
                        <td>
                            <a class="btn btn-editar" href="{{ route('admin.funcionarios.editar',$registro->id) }}">Editar</a>
                            <a class="btn btn-deletar" href="{{ route('admin.funcionarios.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <a class="btn btn-adicionar" href="{{ route('admin.funcionarios.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection
