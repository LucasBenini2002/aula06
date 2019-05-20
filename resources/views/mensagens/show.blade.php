<h1>Dados de uma Mensagem</h1><br>
	<h1>{{$mensagens->titulo}}</h1>
	<h2>{{$mensagens->texto}}</h2>
	<h3>{{$mensagens->autor}}</h3>
	<br><br><br>

	<a href="/mensagens/{{$mensagens->id}}/delete">DELETAR MENSAGEM</a><br><br>

	<a href="/mensagens/{{$mensagens->id}}/edit">EDITAR MENSAGEM</a><br><br>
	<br>
	<a href="/mensagens/">VOLTAR A TELA INICIAL</a>