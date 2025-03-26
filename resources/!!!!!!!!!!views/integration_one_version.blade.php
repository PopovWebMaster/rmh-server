@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_integration_docs_version }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @includeFirst([ 'layouts.integration_one_version.'.$version_blade, 'layouts.integration_one_version.default'], [])  
@endsection

@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_integration_docs_version }}></script>
@endsection 