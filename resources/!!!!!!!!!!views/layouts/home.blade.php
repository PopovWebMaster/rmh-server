<div class = 'homePage'>
    <section class = 'bannerBackground'></section>

    <section
        class = 'banner'
    >
        <h1>@lang('homeText.MainHeader')</h1>
        <p>@lang('homeText.BannerParagraph')</p>
        <ul>
            <li>
                <a href = '{{ $locale }}/create'>
                    <span>@lang('homeText.BannerBtnCreate')</span>
                </a>
            </li>

            <li>
                <a href = '{{ $locale }}/templates/1/business-card/all' >
                    <span>@lang('homeText.BannerBtnShowTemplate')</span>
                </a>
            </li>
        </ul>
    </section>


    <section class = 'sectionTypeLanding descriptionShort' >
        <div class = 'wraper'>
            <header>
                <h2>@lang('homeText.BusinessCardTemplate')</h2>
            </header>
            <p>@lang('homeText.BusinessCardTemplateText')</p>
        </div>
    </section>

    <section class = 'sectionTypeLanding descriptionFeatures' >
        <div class = 'wraper'>
            <article>
                <header>
                    <span class = 'fa-bolt bolt'></span>
                    <h3>@lang('homeText.FeaturesProfitably')</h3>
                </header>
                <p>@lang('homeText.FeaturesProfitablyText')</p>
            </article>

            <article>
                <header>
                    <span class = 'fa-area-chart area_chart'></span>
                    <h3>@lang('homeText.FeaturesNoNeedToSearch')</h3>
                </header>
                <p>@lang('homeText.FeaturesNoNeedToSearchText')</p>
            </article>

            <article>
                <header>
                    <span class = 'fa-cloud cloud'></span>
                    <h3>@lang('homeText.FeaturesRequirementsMet')</h3>
                </header>
                <p>@lang('homeText.FeaturesRequirementsMetText')</p>
            </article>

            <article>
                <header>
                    <span class = 'fa-lock lock'></span>
                    <h3>@lang('homeText.FeaturesAutoLayoutCheck')</h3>
                </header>
                <p>@lang('homeText.FeaturesAutoLayoutCheckText')</p>
            </article>
        </div>

    </section>

    <div id = 'showTemplatesApp'>
        @include('layouts.listOfHiddenLinksToAllTemplates')

    </div>


    <section id = 'subscription' class = 'subscription'>
        <div class = 'S_wrapper'>
            <h3>@lang('homeText.SubscriptionH3')</h3>
            <p>@lang('homeText.SubscriptionP')</p>
            <div class = 'sendEmailWrapper'>
                <input 
                    type = 'text'
                    placeholder = 'E-mail'
                    value = ''
                />

                <span class = 'btnSengEmail'>@lang('homeText.SubscriptionSend')</span>
            </div>
            <div class = 'callbackMessage'>
                <span>@lang('homeText.message')</span>
            </div>
        </div>
    </section>



    <footer>
        <div>

            <!-- @include('layouts.home.networks') -->

            <ul class = 'copyright'>
                <li>© @lang('homeText.Footer_1') PrintIn.</li>
                <li>{{ config( 'app.ADMIN_LINK_CREATING_WEBSITES_TITLE' ) }}
                    <a href = "{{ config( 'app.ADMIN_LINK_CREATING_WEBSITES_LINK' ) }}" target = '_blank'>@lang('homeText.Footer_2')</a>
                </li>

                @if( $country === 'RU' || $country === 'AB' || $country === 'UA' || $country === 'BY' || $country === 'OS' || $country === 'AM' || $country === 'KZ' || $country === 'VN' || $country === 'TJ' )

                <script>(function () { var widget = document.createElement("script"); widget.dataset.pfId = "ac8ce969-3e4b-4108-a2ec-003ae0103aa3"; widget.src = "https://widget.profeat.team/script/widget.js?id=ac8ce969-3e4b-4108-a2ec-003ae0103aa3&now="+Date.now(); document.head.appendChild(widget); })()</script>
                <li id = 'copyrightOffer'><a href = "{{asset('public/oferta/ru/oferta.pdf')}}" target = '_blank'>Договор публичной оферты и политика конфиденциальности</a></li>



                @else
                <li id = 'copyrightOffer'><a href = "{{asset('public/oferta/other/Privacy policy and rights of use PrintIN.pdf')}}" target = '_blank'>Privacy policy and rights of use</a></li>
                <li >
                <a....>Privacy policy and rights of use</a>.   Сooperation and support: <a href=mailto:info@printin.site?Subject=FromPrintIN>info@printin.site</a>
                </li>
                
                @endif
            </ul>

            
        </div>
        
    </footer>

    @if( $country === 'RU' || $country === 'UA' )
        <div id = 'VtorgeLink'>
            <a  href = 'https://site.vtorge.com/?promo=9EF187-34D3DD' target = '_blank'>Конструктор сайтов</a>
        </div>
        <script>var elem = document.getElementById('VtorgeLink');elem.onclick = (event) => {if( event.target.nodeName === 'DIV' ){elem.children[0].click();};}</script>
    @endif





</div>