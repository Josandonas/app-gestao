<form action={{ route('site.contato') }} method="POST" >
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}">
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}">
    {{$errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $motivo_contat)
        <option value="{{$motivo_contat->id}}">{{$motivo_contat->motivo_contato}}</option>
        @endforeach
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea name="mensagem" class="{{$classe}}">Preencha aqui a sua mensagem</textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

{{-- @if($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red;">
        @foreach($errors->all() as $erro)
            {{$erro}}
            <br>
        @endforeach
    </div>
@endif --}}

