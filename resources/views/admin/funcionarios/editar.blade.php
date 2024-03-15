@extends('layout.site')

@section('titulo','funcionarios')
   
@section('conteudo')

    <div class="container">
        <h3 class="center">Editando funcionarios</h3>

        <div class="row">
           <form action="{{route('admin.funcionarios.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.funcionarios._form')

            <button class="btn deep-orange">atualizar</button>

           </form>
        </div>

    </div>

@endsection
