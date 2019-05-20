<h1>Formulario de cadastro de atividades</h1>
<hr>

<form action="/atividades" method="post">
    {{csrf_field()}}

    Título:     <input type="text" name="title"> <br>
    Descrição:  <input type="text" name="description"> <br>
    Agendado para:  <input type="datetime-local" name="scheduledto"> <br>
    <input type="submit" value="salvar">
    </form>

    <h2><a href="/atividades/">VOLTAR A TELA INICIAL</a><h2>

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


    