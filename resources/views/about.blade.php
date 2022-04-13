@extends('layouts.app')

@section('title', 'О блоге')

@section('header', 'О блоге')

@section('content')
    <p>Эксперименты с Laravel</p>
    <div class="about__container">
        @foreach($aTeam as $aTeamItem)
            <div class="about__container-item">
                {{ $aTeamItem['name'] }} - {{ $aTeamItem['position'] }}
            </div>
        @endforeach
    </div>
@endsection
