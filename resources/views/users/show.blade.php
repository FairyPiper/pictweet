@extends('layout')

@section('content')
    <div class="contents row" >
        <p>{{ $user->name }}さんの投稿一覧</p>
        @foreach($tweets as $tweet)
            <div class="content_post" style="background-image: url({{ $tweet->image }});">
                <p>{{$tweet->text}}</p>
            </div>
        @endforeach
        {{ $tweets->render() }}
    </div>
@endsection