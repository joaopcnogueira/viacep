<h1>Digite um CEP</h1>

<form action="{{ route('api.request') }}" method="post">
    @csrf
    <input type="text" name="cep" id="cep" value="{{old('cep')}}">
    <button type="submit">Buscar</button>
</form>

<br>
<h2>Caso você queira buscar o CEP, preencha o formulário abaixo:</h2>

<form action="{{ route('api.request.cep') }}" method="post">
    @csrf
    <input type="text" name="uf" id="uf" placeholder="UF"><br><br>
    <input type="text" name="cidade" id="cidade" placeholder="cidade"><br><br>
    <input type="text" name="logradouro" id="logradouro" placeholder="logradouro"><br><br>
    <button type="submit">Buscar</button>
</form>


<br>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>    
@endif