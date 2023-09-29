<x-layout title="Atualizar Series">
    <form action={{route('series.update',$series->id)}} method="post">
        @csrf
        @method('PATCH')
        <label for="nome">Digite um nome:</label>
        <input type="text" name="nome" id="nome" value="{{$series->nome}}"/>
        <button type="submit">Editar serie!</button>
    </form>
    </x-layout>