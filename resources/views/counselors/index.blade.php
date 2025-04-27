@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Meet Our Therapists</h2>
    <div class="row">
        @foreach($counselors as $counselor)
        <div class="col-md-4">
            <div class="card p-3">
                <img src="{{ asset('storage/'.$counselor->profile_image) }}" class="card-img-top rounded-circle" style="width: 100px; height: 100px;" alt="{{ $counselor->name }}">
                <div class="card-body text-center">
                    <h4>{{ $counselor->name }}</h4>
                    <p>{{ $counselor->qualification }}</p>
                    <p><strong>Languages:</strong> {{ implode(', ', $counselor->languages) }}</p>
                    <a href="{{ route('counselors.show', $counselor->id) }}" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
