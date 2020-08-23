@extends('layouts.app')
@section('title')
    Give Aid
@endsection
@section('content')
    <x-aid.requests :requests="$requests"></x-aid.requests>
@endsection
