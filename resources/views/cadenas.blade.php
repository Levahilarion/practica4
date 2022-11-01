<x-layouts.app title="cadenas">

    <h1>Calcular el numero de palabras de una cadena ingresada</h1>
    <form action="{{ route('cadenas') }}" method="post">
        @csrf
        <input type="text" name="cadena">
        @error('cadena')
            <div>
                {{ $message }}
            </div>
        @enderror
        <button type="submit">
            Verificar
        </button>
    </form>
    @isset($total)
        La cadena: {{ $cadena }} tiene {{$total}} cadenas
    @endisset
    </x-layouts.app>