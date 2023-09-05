@extends('front::layouts.master')

@section('content')
<button @click="test_app" >test</button>
<wel></wel>
    <p>
        This view is loaded from module: {!! config('front.name') !!}
    </p>
@endsection
