@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Список статей')

@section('content')
    @if($articleCollection->count() > 0)
        <div class="article__container">
            @foreach($articleCollection as $aArticleItem)
                <div class="article__container-item">
                    <h4 class="article__container-item__title">{{ $aArticleItem->name }}</h4>
                    <div class="article__container-item__text">{{ Str::limit($aArticleItem->body, 200) }}</div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
