@extends('layout.site')
   
@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de funcionarios</h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>nome</th>
                        <th>data</th>
                        <th>imagem</th>
                        <th>salario</th>
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
                            <a class="btn deep-orange" href="{{ route('admin.funcionarios.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.funcionarios.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <a class="btn blue" href="{{ route('admin.funcionarios.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection
