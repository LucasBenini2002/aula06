<h1>Excluir Registro</h1>
<hr>

<form action="/mensagens/{{$mensagens->id}}" method="post">
    {{csrf_field()}}
    {{ method_field('DELETE')}}
    <p>Você realmente deseja excluir o registro {{$mensagens->id}}?</p>
    
    <input type="submit" value="Deletar">
    </form>