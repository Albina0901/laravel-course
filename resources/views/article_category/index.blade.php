@extends('layouts.app')

@section('title', 'Категории статей')

@section('header', 'Категории статей')

@section('content')
    @if($categoryCollection->count() > 0)
        <div class="article__container">
            @foreach($categoryCollection as $aCategoryItem)
                <div class="article__container-item">
                    <a href="{{ route('article_category.show', ['id' => $aCategoryItem->id]) }}" class="article__container-item__title">{{ $aCategoryItem->name }}</a>
                    <div class="article__container-item__text">{{ Str::limit($aCategoryItem->description, 200) }}</div>
                </div>
            @endforeach
            <div class="article__container-pagination">
                {{ $categoryCollection->links() }}
            </div>
        </div>
    @endif
@endsection
