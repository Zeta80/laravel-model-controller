div@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($movies as $item)
            <li>
                <div class="card">

                    <p>{{ $item->title }}</p>
                    <p>{{ $item->original_title }}</p>
                    <p>{{ $item->nationality }}</p>
                    <p>{{ $item->date }}</p>
                    <p>{{ $item->vote }}</p>
                    <div class="img">
                        <img src="{{ $item->image }}" alt="">
                    </div>

                </div>
            </li>
        @endforeach
    </ul>
@endsection
