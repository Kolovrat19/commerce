@extends('layouts.app')

@section('content')
    <div class="container">
         <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
               @foreach($trees as $tree)
                     <li><div class="panel">{!! $tree !!}</div></li>
                @endforeach
         </ul>
        <p class="text-center">
            <a href="{!! route("categories.create") !!}">Create</a>
        </p>

    </div>

@endsection

