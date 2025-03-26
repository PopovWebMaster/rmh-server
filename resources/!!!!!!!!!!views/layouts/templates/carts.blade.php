<ul class = 'menuCTemplateCard'>
    @for( $i = 0; $i < count($templates); $i++)
        <li>
            <a href = "{{ asset( $templates[$i]['route'] ) }}" title = "{{ $templates[$i]['pageTitle'] }}" >
                <img src = "{{ asset( $templates[$i]['preview_side_0'] ) }}" title = "{{ $templates[$i]['pageTitle'] }}" />
                <div><span>{{  $templates[$i]['pageHeader'] }}</span></div>
            </a>
        </li>
    @endfor

    
</ul>