@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_layout }} rel="stylesheet">
@endsection

@section('content')
    <div id = "app">

    </div>
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_layout }}></script>
@endsection 
