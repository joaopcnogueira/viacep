<h1>Resultado da Consulta ao CEP {{ $response->cep }}</h1>

@foreach ($response as $key => $value)
    <p><strong>{{ $key }}</strong>: {{ $value }}</p>
@endforeach

<form action="{{ route('api.form') }}">
    <button type="submit">Nova Consulta</button>
</form>
