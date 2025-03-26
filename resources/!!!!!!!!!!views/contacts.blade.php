@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_contacts }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.contacts')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_contacts }}></script>
@endsection 