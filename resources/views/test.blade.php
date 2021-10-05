@extends('layouts.app')
@section('content')

<div x-data="{ count: 0 }">
    <button x-on:click="count++">Ajouter nber produits</button>

    <span x-text="count"></span>
</div>


@stop
