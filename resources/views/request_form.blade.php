<h1>Digite um CEP</h1>

<form action="{{  route('api.request') }}" method="post">
    @csrf
    <input type="text" name="cep" id="cep" value="{{old('cep')}}">
    <button type="submit">Buscar</button>
</form>
