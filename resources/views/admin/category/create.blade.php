@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="hero is-fullheight is-dark is-bold">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column is-4 is-offset-4">
                            <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}">
                                {{ csrf_field() }}
                                <div class="box">
                                    {{--{{dd( $categories )}}--}}
                                    <label class="label">Parent</label>
                                    <p class="control">
                                        <select name="parent_id">
                                            <option value="null" selected>Choise</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id}}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </p>
                                    <label class="label">Name</label>
                                    <p class="control">
                                        <input class="input" type="text" name="name">
                                    </p>

                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Create
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
