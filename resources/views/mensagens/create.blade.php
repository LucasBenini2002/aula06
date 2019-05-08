<h1>Formulario de cadastro de mensagens</h1>
<hr>

<form action="/mensagens" method="post">
    {{csrf_field()}}
    Título:     <input type="text" name="titulo"> <br>
    Descrição:  <input type="text" name="texto"> <br>
    Autor:  <input type="text" name="autor"> <br>
    <input type="submit" value="salvar">
    </form>