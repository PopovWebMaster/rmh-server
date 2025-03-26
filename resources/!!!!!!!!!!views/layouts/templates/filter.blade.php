<ul class = 'menuFormats'>
    @for( $i = 0; $i < count($filterFormatRouteList); $i++)
        <li class = "{{ $filterFormatRouteList[$i]['alias'] === $formatAlias? 'active': '' }}">
            <a href = "{{ $filterFormatRouteList[$i]['route'] }}" title = "{{ $filterFormatRouteList[$i]['pageTitle'] }}">
                <span class = 'menuFormats_a_span_first'>{{ $filterFormatRouteList[$i]['linkTitle'] }}</span>
                @if( $filterFormatRouteList[$i]['linkTitleSize'] !== '' )
                <span class = 'menuFormats_a_span_second'>{{ $filterFormatRouteList[$i]['linkTitleSize'] }}</span>
                @endif
            </a>
        </li>
    @endfor

</ul>

<ul class = 'menuCategory'>
    @for( $i = 0; $i < count($filterCategoryRouteList); $i++)
        <li class = "{{ $filterCategoryRouteList[$i]['alias'] === $categoryAlias? 'active': '' }}">
            <a href = "{{ $filterCategoryRouteList[$i]['route'] }}" title = "{{ $filterCategoryRouteList[$i]['pageTitle'] }}">{{ $filterCategoryRouteList[$i]['linkTitle'] }}</a>
        </li>
    @endfor

</ul>