@extends('front::layouts.master')

@section('content')

    <p>
        This view is loaded from module: {!! config('front.name') !!}
    </p>
@endsection
