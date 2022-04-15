@extends('layouts.app')

@section('title', $article->name)

@section('header', $article->name)

@section('content')
    <div class="article__container">
        <div class="article__container-item">
            <a href="{{ route('article_category.show', ['id' => $article->category_id]) }}">
                Категория - <strong>{{ $article->category->name }}</strong>
            </a>
            <p class="article__container-item__text">{{ $article->body }}</p>
            <div class="article__container-item__flex">
                <span class="article__container-item__view">Просмотров: {{ $article->views_count }}</span>
                <span class="article__container-item__like">Нравится: {{ $article->likes_count }}</span>
            </div>
        </div>
    </div>
@endsection
