@extends('layouts.base')
@section('css', '')

@section('title', 'Modifier')
@section('header')
    <button><a href="/backOffice">Annuler</a></button>
@endsection
@section('content')
    <h1 class="title">Modifier une célébrité</h1>
    <div>
        <form action="/update/{{ $star->id }}" method="POST">
            @csrf
            <div >
                <label for="name">Prénom</label>
                <div>
                    <input type="text"  name="name" placeholder="Prénom" value="{{ $star->prenom }}">
                </div>
            </div>
            <div >
                <label for="surname">Nom</label>
                <div>
                    <input type="text"  name="surname" placeholder="Nom" value="{{ $star->nom }}">
                </div>
            </div>
            <div>
                <label for="image">Image</label>
                <div>
                    <img style="width:30px; height:30px"src="{{ asset('img/'.$star->image_path)}}" />
                    <input type="file" name="image" value="{{ $star->image_path }}">
                </div>
            </div>
            
            <div>
                <label for="description">Description</label>
                <div>
                    <textarea name="description" id="" cols="24" rows="2">{{ $star->description }}</textarea>
                </div>
            </div>
            <div>
                <button type="submit">Envoyer !</button>
            </div>
        </form>
    </div>
@endsection