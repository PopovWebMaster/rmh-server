<div id="appTemplate">


    <div class = 'oneTemplatePage'>
        <section class = 'sectionTypeLanding OTP_section'>
            <div class = 'wraper'>
                <h2 class = 'OTP_header'>
                    <span class = 'OTP_header_name'>{{ $pageHeader }}</span>
                    <span class = 'OTP_header_designer'>{{ $designerTitle }}</span>
                </h2>

                <div class = 'OTP_row'>
                    <span class = 'title'>{{ $Title['Format'] }}: </span>
                    <span class = 'OTP_row_format'>{{ $layoutWidth }}&#215;{{ $layoutHeight }}({{ $unitOfCalculation }})</span>
                </div>

                <div class = 'OTP_row'>
                    <span class = 'title'>{{ $Title['Category'] }}: </span>
                    <span class = 'OTP_row_category'>


                        <div class = 'TDDMenu'>
                            <span>{{ $categoryTitle }}</span>
                            <ul>
                            @for( $i = 0; $i < count($categoryRouteList); $i++)
                                <li class = "{{ $categoryRouteList[$i]['alias'] === $categoryAlias? 'active': '' }}">
                                    <a href = "{{ $categoryRouteList[$i]['route'] }}" title = "{{ $categoryRouteList[$i]['pageTitle'] }}">{{ $categoryRouteList[$i]['linkTitle'] }}</a>
                                </li>
                            @endfor
                            </ul>
                        </div>
                        
                    </span>
                </div>

                <div id = 'OTP_button_edit_online'>
                    <div class = 'OTP_button_edit_online' data-alias = "{{ $templateAlias }}">
                        <div class = 'OTP_button_wrapper'>
                            <span class = 'icon-pencil OTP_button_edit_online_icon'></span>
                            <span>{{ $Title['EditOnline'] }}</span>
                        </div>
                    </div>
                </div>


                <div class = 'OTP_preview'>

                    <div class = 'OTP_preview_info'>
                        <div class = 'OTP_preview_info_side_0'>
                            <h3>{{ $Title['FrontSide'] }}</h3>
                            <div class = 'preview_img_container'>
                                <img src = "{{ $preview_side_0 }}" />
                                <div class = 'preview_display_layouts_container'></div>
                            </div>
                            <ul>
                                @for( $i = 0; $i < count( $layerTextList[0] ); $i++ )
                                <li>{{$layerTextList[0][$i]}}</li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    @if( $numberOfSides == 2 )
                    <div class = 'OTP_preview_info'>
                        <div class = 'OTP_preview_info_side_1' >
                            <h3>{{ $Title['ReverseSide'] }}</h3>
                            <div class = 'preview_img_container'>
                                <img src = "{{ $preview_side_1 }}" />
                                <div class = 'preview_display_layouts_container'></div>
                            </div>
                            <ul>
                                <ul>
                                    @for( $i = 0; $i < count( $layerTextList[1] ); $i++ )
                                    <li>{{$layerTextList[1][$i]}}</li>
                                    @endfor
                                </ul>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
                
            </div>



            <div class = 'OTP_curtain'></div>
        </section>

    </div>

    <div id = 'showTemplatesApp'>
        @include('layouts.listOfHiddenLinksToAllTemplates')
    </div>


</div>