@extends('layouts.app',['title'=>'LAYOUT'])
@section('contenu')
   {{"Bienvenue"}}
        {{-- @ permet de ne pas interpreter une ligne de code en laravel  mais affiche la ligne de code--}}
   @{{"Bonjour"}}
    {{-- @verbatim  @endverbatim de ne pas interpreter plusieurs lignes de code en laravel 
    mais affiche les lignes de code--}}
    @verbatim
        {{Nous sommes là}}
    @endverbatim
    <h1>{{$nom }}</h1>
@endsection

@section('fin')
    Merci a vous &copy
@endsection