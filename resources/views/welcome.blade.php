@extends('layouts.app')
@section('title')
    Washington University Mutual Aid
@endsection
@section('content')
    <div class="prose m-auto">
        <h3>Why we exist</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consequatur ducimus eaque facilis iure, officiis quam rerum! Aliquam animi at distinctio doloremque eaque labore magni nesciunt obcaecati sed tempore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consequatur ducimus eaque facilis iure, officiis quam rerum! Aliquam animi at distinctio doloremque eaque labore magni nesciunt obcaecati sed tempore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consequatur ducimus eaque facilis iure, officiis quam rerum! Aliquam animi at distinctio doloremque eaque labore magni nesciunt obcaecati sed tempore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consequatur ducimus eaque facilis iure, officiis quam rerum! Aliquam animi at distinctio doloremque eaque labore magni nesciunt obcaecati sed tempore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consequatur ducimus eaque facilis iure, officiis quam rerum! Aliquam animi at distinctio doloremque eaque labore magni nesciunt obcaecati sed tempore.</p>
    </div>
    @if($requests->count() > 0)
    <hr class="my-10">
    <div class="prose m-auto text-center mb-4">
        <h3>Publicly Visible Requests for Aid</h3>
        <p>Most aid requests are visible only to people with a <em>@wustl.edu</em> email address, but the following
            {{ Str::plural('request', $requests->count()) }} @if($requests->count() === 1) was @else were @endif asked to be shared publicly</p>
    </div>
    <x-aid.requests :requests="$requests"></x-aid.requests>
    @endif
@endsection
