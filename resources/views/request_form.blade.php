<h1>Digite um CEP</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>    
@endif
<br>

<form action="{{  route('api.request') }}" method="post">
    @csrf
    <input type="text" name="cep" id="cep" value="{{old('cep')}}">
    <button type="submit">Buscar</button>
</form>
