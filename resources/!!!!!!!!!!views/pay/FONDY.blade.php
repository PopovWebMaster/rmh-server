@extends('layouts.layout')

@section('link_css')

    <link href= {{ $css_pay_FONDY }} rel="stylesheet">

    <script src="https://pay.fondy.eu/static_common/v1/checkout/ipsp.js"></script>

@endsection

@section('topMenu')
    @include('layouts.topMenu') 
@endsection

@section('content')

    <div id="appPay" data-filefolder = "{{ $fileFolder }}"></div>
 
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_pay_FONDY }}></script>
@endsection 