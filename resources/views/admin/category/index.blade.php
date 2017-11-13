@extends('layouts.master')

@section('content')
    <div class="container">

            {{--{{ dd($trees) }}--}}
               @foreach($trees as $tree)
                     {!! $tree !!}
                @endforeach

        <p class="text-center">
            <a href="{!! route("categories.create") !!}">Create</a>
        </p>

    </div>

@endsection


