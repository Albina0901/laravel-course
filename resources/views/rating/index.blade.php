@extends('layouts.app')

@section('title', 'Рейтинг статей')

@section('header', 'Рейтинг статей')

@section('content')
    @if ($articleCollection->count() > 0)
        <div class="rating__container">
            @foreach($articleCollection as $aArticlesItem)
                <div class="rating__container-item">
                    <h4 class="rating__container-item__title">{{ $aArticlesItem->name }}</h4>
                    <p class="rating__container-item__text">{{ $aArticlesItem->body }}</p>
                    <div class="rating__container-item__flex">
                        <span class="rating__container-item__view">Просмотров: {{ $aArticlesItem->views_count }}</span>
                        <span class="rating__container-item__like">Нравится: {{ $aArticlesItem->likes_count }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

