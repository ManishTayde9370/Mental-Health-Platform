@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <img src="{{ asset('storage/'.$counselor->profile_image) }}" class="rounded-circle" style="width: 150px; height: 150px;" alt="{{ $counselor->name }}">
        <h2 class="mt-3">{{ $counselor->name }}</h2>
        <p>{{ $counselor->qualification }}</p>
    </div>

    <h4>Languages:</h4>
    <p>{{ implode(', ', $counselor->languages) }}</p>

    <h4>Counseling Modes:</h4>
    <p>{{ implode(', ', $counselor->counseling_modes) }}</p>

    <h4>Expertise:</h4>
    <p>{{ implode(', ', $counselor->expertise) }}</p>

    <h4>Approach:</h4>
    <p>{{ implode(', ', $counselor->approach) }}</p>

    <h4>About:</h4>
    <p>{{ $counselor->about }}</p>

    <h4>Why Counseling?</h4>
    <p>{{ $counselor->why_counseling }}</p>

    <h4>Concerns Close to My Heart:</h4>
    <p>{{ $counselor->close_concerns }}</p>

    <h4>How I Handle Stress:</h4>
    <p>{{ $counselor->handle_stress }}</p>

    <div class="text-center mt-4">
        <a href="#" class="btn btn-success">Book a Session</a>
    </div>
</div>
@endsection
