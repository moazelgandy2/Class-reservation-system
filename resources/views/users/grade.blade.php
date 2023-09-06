@extends('users.layouts.layout')

@section('content')
    <div class="image-holder">
        <img src="{{ asset($grades->grade_buy_img) }}" alt="{{ $grades->grade_name }}">
    </div>
@endsection
