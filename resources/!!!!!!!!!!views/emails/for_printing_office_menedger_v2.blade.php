<div>
    <div>{{ $ClientEmail }}</div>
    <div>{{ $Layout }}</div>
    <div>{{ $FrontSide }}</div>
    <ul>
        <li><a href = "{{$side_0_pdf_rgb}}" target = '_blank'>Download PDF RGB</a></li>
        <li><a href = "{{$side_0_pdf_cmyk}}" target = '_blank'>Download PDF CMYK</a></li>
        <li><a href = "{{$side_0_jpeg_rgb}}" target = '_blank'>Download JPEG RGB</a></li>
        <li><a href = "{{$side_0_jpeg_cmyk}}" target = '_blank'>Download JPEG CMYK</a></li>
    </ul>

    <div>{{ $ReverseSide }}</div>

    <ul>
        <li><a href = "{{$side_1_pdf_rgb}}" target = '_blank'>Download PDF RGB</a></li>
        <li><a href = "{{$side_1_pdf_cmyk}}" target = '_blank'>Download PDF CMYK</a></li>
        <li><a href = "{{$side_1_jpeg_rgb}}" target = '_blank'>Download JPEG RGB</a></li>
        <li><a href = "{{$side_1_jpeg_cmyk}}" target = '_blank'>Download JPEG CMYK</a></li>
    </ul>

</div>