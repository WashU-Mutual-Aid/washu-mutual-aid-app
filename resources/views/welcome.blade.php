@extends('layouts.app')
@section('title')
    WashU Mutual Aid
@endsection
@section('content')
    <div class="prose m-auto">
        <h3>Who We Are</h3>
        <p>
            The purpose of WashU Mutual Aid is to document and meet the real needs of WashU students.
            We believe individuals know best what they need. We believe we can help one another.
            We believe voicing our needs here can help students organize for more and better assistance in the future.
        </p>
        <p>For questions or concerns, please email <a href="mailto:wustlmutualaid@gmail.com">wustlmutualaid@gmail.com</a>.</p>
    </div>
    @if($requests->count() > 0)
    <hr class="my-10">
    <div class="prose m-auto mb-4">
        <h3>Public Requests for Aid</h3>
        <p>We take privacy seriously, <a href="{{ route('login') }}">login</a> with your <em>@wustl.edu</em> email address to view the full list of requests.</p>
{{--        <p>Most aid requests are visible only to people with an account, but the following--}}
{{--            {{ Str::plural('request', $requests->count()) }} @if($requests->count() === 1) was @else were @endif asked to be shared publicly</p>--}}
    </div>
    <x-aid.requests :requests="$requests"></x-aid.requests>
    @endif
@endsection
