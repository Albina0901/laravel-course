@extends('layouts.app')

@section('title', 'Категории статей')

@section('header', 'Категории статей')

@section('content')
    @if($articleCategoryCollection->count() > 0)
        <div class="article__container">
            @foreach($articleCategoryCollection as $aArticleItem)
                <div class="article__container-item">
                    <h4 class="article__container-item__title">{{ $aArticleItem->name }}</h4>
                    <div class="article__container-item__text">{{ Str::limit($aArticleItem->description, 200) }}</div>
                </div>
            @endforeach
            <div class="article__container-pagination">
                {{ $articleCategoryCollection->links() }}
            </div>
        </div>
    @endif
@endsection

