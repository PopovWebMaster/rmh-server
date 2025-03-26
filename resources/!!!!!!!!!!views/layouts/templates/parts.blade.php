<div id = 'templatesPartsMenu' >
    <div class = 'templatesPartsMenu hide'>
        <ul>
        @if( count($partRouteList) > 1 )
        @for( $i = 0; $i < count($partRouteList); $i++)
            <li class = "{{ $i + 1 == $part? 'activePart': '' }}">
                <a href = "{{ $partRouteList[$i]['route'] }}" title = "{{ $partRouteList[$i]['pageTitle'] }}" >{{ $partRouteList[$i]['linkTitle'] }}</a>
            </li>
        @endfor
        @endif
        </ul>

    </div>

</div>