@extends('layouts.app')
@section('title')
    My Requests
@endsection
@section('content')
    <x-aid.requests :requests="$requests"></x-aid.requests>
@endsection
