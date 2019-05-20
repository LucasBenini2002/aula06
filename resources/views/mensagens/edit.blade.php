<h1>Formulario de edição da mensagens cód: {{$mensagens->id}}</h1>
<hr>

<form action="/mensagens/{{$mensagens->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    Título:     <input type="text" name="titulo" value="{{$mensagens->titulo}}"> <br>
    Descrição:  <input type="text" name="texto" value="{{$mensagens->texto}}"> <br>
    Autor:  <input type="text" name="autor" value="{{$mensagens->texto}}"> <br>
<input type="submit" value="Salvar">
</form>
<h2><a href="/mensagens/">VOLTAR A TELA INICIAL</a><h2>


    @if ($errors->any())
    <div class="container">
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    </div>
    @endif


    @if (\Session::has('success'))
    <div class="container">
    <div class="alert alert-success">
     {{\Session::get('success')}}

    
    </div>
    </div>
    @endif
