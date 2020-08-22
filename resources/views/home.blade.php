@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div>
        <ul>
            @foreach($requests as $aid)
                <li @if(!$loop->first) class="border-t border-gray-200" @endif>
                    <x-aid-row :aid="$aid"></x-aid-row>
                </li>
            @endforeach
        </ul>
        <div class="">
            {{ $requests->links() }}
        </div>
    </div>
@endsection
