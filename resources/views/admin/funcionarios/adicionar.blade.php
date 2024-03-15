@extends('layout.site')

@section('titulo','Cursos')
   
@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de funcionarios</h3>

        <div class="row">
           <form action="{{route('admin.funcionarios.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.funcionarios._form')

            <button class="btn deep-orange">salvar</button>

           </form>
        </div>

    </div>

@endsection
