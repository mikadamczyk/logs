@extends('layouts.scaffold')

@section('main')

<h1>Edit Telescope</h1>
{{ Form::model($telescope, array('method' => 'PATCH', 'route' => array('telescopes.update', $telescope->id))) }}
    <ul>
        <li>
            {{ Form::label('deleted', 'Deleted:') }}
            {{ Form::input('number', 'deleted') }}
        </li>

        <li>
            {{ Form::label('hidden', 'Hidden:') }}
            {{ Form::input('number', 'hidden') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('telescopes.show', 'Cancel', $telescope->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop