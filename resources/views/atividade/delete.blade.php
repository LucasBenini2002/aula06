<h1>Excluir Atividade</h1>
<hr>

<form action="/atividades/{{$atividades->id}}" method="post">
    {{csrf_field()}}
    {{ method_field('DELETE')}}
    <p>Você realmente deseja excluir o registro {{$atividades->id}}?</p>
    
    <input type="submit" value="Deletar">
    </form>