@extends('layouts.base')
@section('css', '')

@section('title', 'Ajouter')
@section('header')
    <button><a href="/backOffice">Annuler</a></button>
@endsection
@section('content')
    <h1 class="title">Ajouter une célébrité</h1>
     <div>
        <form action="/addStar" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Prénom</label>
                <div>
                    <input type="text" name="name" placeholder="Prénom" value="Jason">
                </div>
            </div>
            <div>
                <label for="surname">Nom</label>
                <div>
                    <input type="text" name="surname" placeholder="Nom" value="Mamoa">
                </div>
            </div>
            <div>
                <label for="image">Image</label>
                <div>
                    <input type="file" name="image">
                </div>
            </div>
            <div>
                <label for="description">Description</label>
                <div>
                    <input type="text" name="description" placeholder="description" value="lorem">
                </div>
            </div> 
            <div>
                <button type="submit">Ajouter !</button>
            </div>
        </form>
    </div> 
   
@endsection