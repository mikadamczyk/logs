@extends('layouts.scaffold')

@section('main')

<h1>Show Filter</h1>

<p>{{ link_to_route('filters.index', 'Return to all filters') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Deleted</th>
				<th>Hidden</th>
				<th>Name</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $filter->deleted }}}</td>
					<td>{{{ $filter->hidden }}}</td>
					<td>{{{ $filter->name }}}</td>
                    <td>{{ link_to_route('filters.edit', 'Edit', array($filter->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('filters.destroy', $filter->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop