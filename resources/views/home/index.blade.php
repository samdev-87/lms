@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col-md-6">
            <small>Программа 30 мин.</small>
            <h2>Привет! Мы рады приветствовать вас в команде SOFIZAR</h2>
            <p>В этом курсе вы узнаете и тд</p>
            <p>Основная задача ювелирного завода SOFIZAR обратить внимание потребителя на качество ювелирных украшений.</p>
        </div>
        <div class="col-md-6">
            <div class="list-group">
                @foreach($viewData['lessons'] as $lesson)
                    <a href="{{ route('home.lesson', ['id' => $lesson->id]) }}" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $lesson->title }}</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">{{ $lesson->description }}</p>
                        <small>And some small print.</small>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
