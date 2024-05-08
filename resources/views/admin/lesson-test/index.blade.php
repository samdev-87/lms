@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">Create Lesson Test</div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.lesson-test.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Question:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="question" value="{{ old('question') }}" type="text" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Answers</label>
                    <input class="form-control" name="answers" value="{{ old('answers') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Correct Answer</label>
                    <input class="form-control" name="correct-answer" value="{{ old('correct-answer') }}" type="number">
                </div>
                {{--<div class="mb-3"><label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                </div>--}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Manage Lesson Tests</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Question</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["lessonTests"] as $lessonTest)
                    <tr>
                        <td>{{ $lessonTest->id }}</td>
                        <td>{{ $lessonTest->title }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.lesson-test.edit', ['id' => $lessonTest->id])}}">
                                <i class="bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.lesson-test.delete', $lessonTest->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
