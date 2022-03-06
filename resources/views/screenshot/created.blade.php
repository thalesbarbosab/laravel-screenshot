@extends('layouts.app')
@section('title','ScreenShot')
@section('content_header','Generated Screenshot')
@section('content')
    <a class="btn btn-info btn-xl" href="{{ route('screenshot.index') }}">Go Back</a><br><br>
    <img src="{{ $base_64_image }}" title="generated screeenshot" style="width: 100%;">
@endsection
