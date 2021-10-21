@extends('layouts.base')
@section('css','style')
@section('title', 'Liste des Stars')
@section('content')
<div class="list">
    <ul>
        @foreach ($stars as $star)
        <div class="profil">
            <div class="onglet">
                <li onclick="show()">{{ $star->prenom }} {{ $star->nom }}</li>
            </div>
            <div class="description">
                <img class="avatar"src="{{ asset('img/'.$star->image_path)}}" />
                <div class="details">
                    <h3>{{ $star->prenom }} {{ $star->nom }}</h3> 
                    <p>{{ $star->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
        
    </ul>
</div>
<script src="/js/script.js"></script>
@endsection