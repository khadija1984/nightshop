@extends('layouts.app')
@extends('layouts.master')

@section('content')
        
        <ul>
            @foreach($categorie as $categorie)
            <li>
                <h3>{{ $categorie->id }}</h3>
                <h3>{{ $categorie->titre }}</h3>
                <div> {{ $categorie->image }}</div>
            </li>
            @endforeach
        </ul>
        
@endsection
