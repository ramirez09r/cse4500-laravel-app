@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>New Event</h1>
@stop

@section('content')
    <form method="post" action="{{ route('calendar.store') }}" >
        @csrf
        <x-adminlte-input name="title" label="Title" />
        <x-adminlte-input name="Start" type="datetime-local" />
        <x-adminlte-input name="End" type="datetime-local" />
        <x-adminlte-button type="Submit" label="Submit" />
    </form>
@stop
