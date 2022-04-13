@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <p>Тут будут статьи</p>
    @if($oArticle->count() > 0)
        <div class="article__container">
            @foreach($oArticle->toArray() as $aArticleItem)
                <div class="article__container-item">
                    <h5 class="article__container-item__title">{{ $aArticleItem['name'] }}</h5>
                    <div class="article__container-item__text">{{ $aArticleItem['body'] }}</div>
                    <span class="article__container-item__count">{{ $aArticleItem['views_count'] }}</span>
                </div>
            @endforeach
        </div>
    @else
        Статей нет
    @endif
@endsection
