<form action={{ route('site.contato') }} method="POST" >
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $motivo_contat)
        <option value="{{$motivo_contat->id}}">{{$motivo_contat->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

