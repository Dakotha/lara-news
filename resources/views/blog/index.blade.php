@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-3 gap-10">
        @foreach ($allNews['results'] as $news)
            <x-news-card :news="$news" />
        @endforeach
    </div>
@endsection