@extends('layouts/public')
@section('content')
    <div>
        <h1>Services/Education</h1>
        @foreach ($services as $service)
            <div>{{ $service->category }}</div> <!-- Display the name of each service -->
        @endforeach
    </div>

@endsection
