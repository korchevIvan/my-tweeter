@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="w-3/12">
            nav
        </div>
        <div class="w-7/12 border-2 border-gray-800 border-top-0 border-b-0">
            <app-timeline/>
        </div>
    </div>
@endsection
