<div  id = 'appIntegrationFrameDocs'>
    <section class = 'sectionTypeLanding integrationVersionsList' >
        <div class = 'wraper'>
            <header>
                <h1>integration</h1>
            </header>
            <div class = 'versionParagraph'>
                <p>
                    @lang('integration.DocsParagraph')
                </p>
            </div>

            <div class = 'versionList'>
                <ul>
                @for( $i = 0; $i < count($versionsList); $i++)
                    <li>
                        <a href = "{{ asset( $versionsList[$i]['docs_route'] ) }}" >
                            <span class = 'VL_title'>v{{  $versionsList[$i]['version'] }}</span>
                            <span class = 'VL_data'>{{ $versionsList[$i]['date'] }}</span>
                        </a>
                    </li>
                @endfor
                </ul>
            </div>

        </div>

    </section>
</div>