<h1>Atividades {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b> {{$atividade->id}}</h3>
<h3><b>Data Evento:</b> {{$atividade->scheduledto}}</h3>
<h3><b>Titulo:</b> {{$atividade->title}}</h3>
<h3><b>Descrição:</b> {{$atividade->description}}</h3>
<h3><b>Criada em:</b> {{$atividade->created_at}}</h3>
<h3><b>Atualizada em:</b> {{$atividade->updated_at}}</h3>

<a href="/atividades/{{$atividade->id}}/delete">DELETAR ATIVIDADE</a><br><br>
<a href="/atividades/{{$atividade->id}}/edit">EDITAR ATIVIDADE</a><br><br>
<a href="/atividades/">VOLTAR A TELA INICIAL</a>
