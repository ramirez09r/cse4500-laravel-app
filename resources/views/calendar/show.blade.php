@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
    <h2>{{ $calendar->title; }}</h2>
    <div><p>{{ $calendar->start_at; }}% Start</p></div>
    <div><p>{{ $calendar->end_at; }}% Ends</p></div>
@stop
