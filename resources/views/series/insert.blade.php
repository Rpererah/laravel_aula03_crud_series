<x-layout title="Inserir Series">
<form action={{route('series.store')}} method="POST">
    @csrf
    <label for="nome">Digite um nome:</label>
    <input type="text" name="nome" id="nome"/>
    <button type="submit">Criar serie!</button>
</form>
</x-layout>