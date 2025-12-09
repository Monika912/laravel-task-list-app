@extends('layouts.app')

@section('title', 'EDIT TASK')

@section('content')
    @include('form', ['task' => $task])
@endsection
