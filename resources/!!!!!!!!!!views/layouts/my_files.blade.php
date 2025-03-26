<div id = 'appMyFiles'>

    <div class = 'myFiles'>
        <section class = 'sectionTypeLanding'>
            <div class = 'wraper'>
                <header>
                    <h2 class = ''>{{ $MyFilesTitle }}</h2>
                </header>

                <ul class = 'productList'>

                @if( count( $productFilesList ) === 0 )
                    <li class = 'P_no_files'>
                        <span>@lang('myFile.TheListIsEmpty')</span>
                    </li>
                @else
                    @for( $i = 0; $i < count( $productFilesList ); $i++ )

                    <li class = 'P_file'>
                        <a href = "{{ route('my_file', [ 'locale' => $locale, 'fileFolder' => $productFilesList[$i]['folderName'] ]) }}">
                            
                            <span class = 'P_format'>{{ $productFilesList[$i]['format'] }}</span>
                        
                            <div class = 'preview'>
                                <img src = "{{  $productFilesList[$i]['previewPuth'] }}" />
                            </div>

                            <span class = 'P_folder'>{{ $productFilesList[$i]['folderName'] }}</span>
                        
                            

                            @if( $productFilesList[$i]['pay_status'] )
                                <span class = 'P_payed'>@lang('myFile.PaidFor')</span>
                            @endif
                            <span class = 'P_date'>{{ $productFilesList[$i]['date'] }}</span>
                        </a>
                    </li>
                        
                    @endfor
                @endif

                </ul>

                
            </div>
        </section>


        
    </div>


</div>




