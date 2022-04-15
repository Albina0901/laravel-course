@extends('layouts.app')

@section('title', $category->name)

@section('header', $category->name)

@section('content')
    <div class="article__container-item">
        <div class="article__container-item__text">{{ $category->description }}</div>
        @if (!$category->articles->isEmpty())
            <h4>Список статей</h4>
            @foreach($category->articles as $articleItem)
                <ol>
                    <a class="article__container-article" href="{{ route('articles.show', ['id' => $articleItem->id ]) }}">
                        - {{ $articleItem->name }}
                    </a>
                </ol>
            @endforeach
        @endif
    </div>
@endsection


