@extends('layouts.app')
@section('title','ScreenShot')
@section('content_header','Generate Screenshot')
@section('content')
    <a class="btn btn-info btn-xl" href="/">Go Back</a><br><br>
    <form action="{{ route('screenshot.store') }}" method="post">
        @csrf
        <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
            <label for="url">Insert Url</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                   placeholder="insert here the complete url, ex: https://www.example.com">
            @if ($errors->has('url'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
            <br>
            <button class="btn btn-primary btn-xl">Submit</button>
        </div>
    </form>
@endsection
