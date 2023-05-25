@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $technology->name }}</h2>
        <ul>
            @foreach ($technology->records as $record)
                <li><a href="{{ route('admin.records.show', $record) }}">{{ $record->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
