<x-layout title="Ver Series">
<ul>

    @isset($mensagem)
        <div>
            <h3>{{$mensagem}}</h3>
        </div>
    @endisset

    @foreach ($series as $serie)
    <li>{{$serie->nome}}</li>
    
    <form action={{route('series.edit',$serie->id)}}>
        @csrf
        <button>E</button>
    </form>
    <form action={{route('series.destroy',$serie->id)}} method="POST">
        @csrf
        @method('DELETE')
        <button>X</button>
    </form>
    @endforeach
</ul>

<a href={{route('series.create')}}>Adicionar serie</a>
</x-layout>