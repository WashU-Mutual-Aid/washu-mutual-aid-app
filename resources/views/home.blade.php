@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-aid.requests :requests="$requests"></x-aid.requests>
@endsection
