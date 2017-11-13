@extends('layouts.master')

@section('content')
    <form  action="{{ action('CategoryController@update', $item->id) }}"  method="POST">

        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="box">

        <label class="label">Parent</label>
        <p class="control">
        {!!
        Form::select('parent_id', $categories, $item->parent_id)
        !!}
        </p>

        <label class="label">Name</label>
    {!! Form::label('Mame', null, ['v-on:change'=>'myMethod']) !!}
   <p class="control">
   <input class="input" type="text" name="name" value="{{ old('name', $item->name) }}">
   </p>
   </div>
   <div class="form-group">

       <button type="submit" >
           Update
       </button>
   </div>

</form>

@endsection
@push('script')
<script>
    new Vue ({
        el: '#app',
        data: {
            myMethod: true,
            lade: true
        }
    });
</script>
@endpush