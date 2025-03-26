<header>
    <h1>
        {{ $Title['CollectionOfTemplates'] }}<div class = 'TDDMenu' >
            <span class = {{ count($filterFormatRouteList) > 1? 'clicked': '' }} >{{$Title['ActiveFormat']}}.</span> 

            @if( count($filterFormatRouteList) > 1 )
            <ul>
            @for( $i = 0; $i < count($filterFormatRouteList); $i++)
                <li>
                    <a href = "{{ $filterFormatRouteList[$i]['route'] }}" title = "{{ $filterFormatRouteList[$i]['pageTitle'] }}">
                        {{ $filterFormatRouteList[$i]['linkTitle'] }}
                        
                    </a>
                </li>
            @endfor
            </ul>
            @endif


                  
        </div>
        
        {{ $Title['Theme'] }}
        <div class = 'TDDMenu'>
            <span class =  {{ count( $filterCategoryRouteList ) > 1? 'clicked': '' }}>
                {{ $Title['ActiveCategory'] }}
            </span>     
            @if(count( $filterCategoryRouteList ) > 1)
            <ul>
            @for( $i = 0; $i < count($filterCategoryRouteList); $i++)
                <li><a href = "{{ $filterCategoryRouteList[$i]['route'] }}" title = "{{ $filterCategoryRouteList[$i]['pageTitle'] }}">{{ $filterCategoryRouteList[$i]['linkTitle'] }}</a></li>
            @endfor
            </ul>
            @endif
        </div>

    </h1>
</header>


