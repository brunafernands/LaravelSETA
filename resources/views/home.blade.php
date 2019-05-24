@extends('principal')

@section('conteudo')
    <div class="container" text-align="center">
        <h2>Menu Principal</h2>
        <div>
            <a href="/alunos"><img src="{{ url('/images/aluno.png')}}" align="left"></a>
        </div>
        <div>
            <a href="/professores"><img src="{{ url('/images/professores.png')}}" align="left"></a:
        </div>
        <div>
            <a href="/disciplinas"><img src="{{ url('/images/disciplinas.png')}}" align="left"></a>
        </div>
        <div>
            <a href="/cursos"><img src="{{ url('/images/curso.png')}}" align="left"></a>
        </div>
    </div>
@stop