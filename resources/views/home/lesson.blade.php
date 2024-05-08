@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">{{$viewData['title']}}</h1>
            <p class="col-md-8 fs-4">{{ $viewData['lesson']->description }}</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>
@endsection
