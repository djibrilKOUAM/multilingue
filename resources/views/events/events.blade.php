@extends('layouts.app',['title'=>'EVENTS'])    
@section('contenu')
<h1>Evènements</h1>
    <?php dump($event)//présentation plus belle?>
    {{-- <ul>
        @foreach($event as $event)
            <li>{{ $event }}</li>
        @endforeach
    </ul> --}}
    {{-- autre méthode --}}
    <ul>
        @forelse($event as $event)
            <li>{{ $event }}</li>
        @empty
            pas d'évènement
        @endforelse
    </ul>
@endsection