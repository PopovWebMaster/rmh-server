<ul style = 'opacity: 0;'>
@for( $i = 0; $i < count($listOfHiddenLinksToAllTemplates); $i++)
    <li>
        <a href = "{{ $listOfHiddenLinksToAllTemplates[$i]['route'] }}" title = "{{ $listOfHiddenLinksToAllTemplates[$i]['title'] }}">{{ $listOfHiddenLinksToAllTemplates[$i]['title'] }}</a>
    </li>
@endfor
</ul>