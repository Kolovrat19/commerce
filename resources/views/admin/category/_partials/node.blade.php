<a href="{{ route('categories.show', ['category_id']) }}">category_name</a>
<a href="{{ route('categories.edit', ['category_id']) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

{!! Form::open([ 'method'  => 'delete', 'route' => [ 'categories.destroy', 'category_id' ]]) !!}
{{ method_field('delete') }}
<button>Delete</button>
{!! Form::close() !!}
