<h1>Lista de Atividades</h1>
<hr>

@if (\Session::has('success'))
    <div class="container">
    <div class="alert alert-success">
     {{\Session::get('success')}}
    </div>
    </div>
    @endif



@foreach($atividades as $atividade)
	
	<h2><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></h2>
	<p>{{$atividade->description}}</p>
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  }}</h3>
	<br>
@endforeach

<h2><a href="/atividades/create">CADASTRAR NOVA ATIVIDADE</a><h2>

