<x-layouts.app title="fibonacci">

<h1>Serie Fibonacci</h1>
    <form action="{{ route('fibonacci') }}" method="post">
        @csrf
        <input 
            type="number" 
            value="{{ isset($n) ? $n : 1  }}" 
            min="1" 
            max="30" 
            required
            name="n"
        >
        
        @error('n')
        <div>
            {{ message }}
        </div>
        @enderror
        <button type="submit">
            Calcular
        </button>
    </form>
    @isset($suma)
        <section>
           La serie Fibonacci de {{ $n }} es: 
        @for ($i = 0; $i <$n; $i++)
            {{ $fibo[$i] }}
        @endfor
        </section>
    @endisset

</x-layouts.app>