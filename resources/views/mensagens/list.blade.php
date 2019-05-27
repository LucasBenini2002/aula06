<h1>Lista de Mensagens</h1>
<hr>

@if (\Session::has('success'))
    <div class="container">
    <div class="alert alert-success">
     {{\Session::get('success')}}


    
    </div>
    </div>
    @endif




@foreach($mensagens as $mensagens)
	<h2><a href="/mensagens/{{$mensagens->id}}">{{$mensagens->titulo}}</a></h2>
	
	<br>
	
@endforeach
 
@if(Auth::check())
<a href="/mensagens/create">CADASTRAR NOVA MENSAGEM</a>
@endif
