@extends('layouts.scaffold')

@section('main')

<h1>All conditions</h1>

<!-- <p>{{ link_to_route('filters.create', 'Add new filter') }}</p> -->
<p>
<a href="{{ route('conditions.create') }}" class="btn btn-success"><i class="icon-white icon-plus-sign"></i> 
Add new condition
</a>
</p>
@if ($conditions->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Deleted</th>
				<th>Hidden</th>
				<th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($conditions as $condition)
                <tr>
                    <td>{{{ $condition->deleted }}}</td>
					<td>{{{ $condition->hidden }}}</td>
					<td>{{{ $condition->name }}}</td>
                    <td>{{ link_to_route('conditions.edit', 'Edit', array($condition->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('conditions.destroy', $condition->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no conditions
@endif

@stop