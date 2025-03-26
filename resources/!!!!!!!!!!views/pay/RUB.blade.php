@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_pay_RUB }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu') 
@endsection

@section('content')

    <div id="appPay" data-filefolder = "{{ $fileFolder }}"></div>
    
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_pay_RUB }}></script>
@endsection 