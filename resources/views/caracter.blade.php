<x-layouts.app title="caracter">


<h1>Calcular el numero de vocales de una cadena</h1>
<form action="{{ route('caracter') }}" method="post">
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
        La cadena: {{ $cadena }} tiene {{$total}} caracter
    @endisset
    </x-layouts.app>