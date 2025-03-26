<header class = 'topHeader' >
    <hgroup>

        <button id = 'buttonOfTopMenu'>
            <span class = 'fpd-icon-format-align-justify'></span>
        </button>

        <a class = 'siteLogo' href="{{ route('home', [$locale]) }}" title = 'logo'> 
            <span>PrintIN</span>
            <span>.site </span>
        </a>

        <nav id = 'topMenu'>
            <div class = 'items'>
                <div>
                    <a href="{{ route('home', [$locale]) }}" @if( $currentPage == 'home' ) class = 'active' @endif title = "@lang('topMenu.Home')" >
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon icon-home' ></span>
                            <span class = 'titleForMenuText'>@lang('topMenu.Home')</span>
                        </span>
                    </a>

                    <a href = "{{ route('create', [$locale]) }}" @if( $currentPage == 'create' ) class = 'active' @endif title = "@lang('topMenu.ToCreate')">
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon icon-doc-new' ></span>
                            <span class = 'titleForMenuText'>@lang('topMenu.ToCreate')</span>
                        </span>
                    </a>

                    <a href = "{{ route('editor', [$locale]) }}" @if( $currentPage == 'editor' ) class = 'active' @endif title = "@lang('topMenu.Editor')">
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon icon-edit-2' ></span>
                            <span class = 'titleForMenuText'>@lang('topMenu.Editor')</span>
                        </span>
                    </a>

                    @if( $user['isAuth'] )
                    <a href = "{{ route('layout_sheet', [$locale]) }}" @if( $currentPage == 'layout_sheet' ) class = 'active' @endif>
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon icon-edit-2' ></span>
                            <span class = 'titleForMenuText'>Раскладочный лист</span>
                        </span>
                    </a>

                    @endif


                    




                    <a href = "{{ route('templates', [$locale]) }}" @if( $currentPage == 'templates' ) class = 'active' @endif title = "@lang('topMenu.Templates')">
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon icon-th-thumb' ></span>
                            <span class = 'titleForMenuText'>@lang('topMenu.Templates')</span>
                        </span>
                    </a>

                    <a href = "{{ route('my_files', [$locale]) }}" @if( $currentPage == 'my_files' ) class = 'active' @endif title = "@lang('topMenu.Templates')">
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon fa-file-pdf-o' ></span>
                            <span class = 'titleForMenuText'>@lang('topMenu.MyFiles')</span>
                        </span>
                    </a>

                    @if( $user['isAuth'] )
                        @if( $user['isPrintingOfficeManager'] )
                    <a href = "{{ route('printing_office_orders', [$locale]) }}" @if( $currentPage == 'printing_office_orders' ) class = 'active' @endif>
                        <span class = 'titleForMenu' >
                            <span class = 'titleForMenuIcon fa-rub' ></span>
                            <span class = 'titleForMenuText'>Заказы</span>
                        </span>
                    </a>
                        @endif
                    @endif




                </div>



            </div>

            <div id = 'topMenu-close' class = 'close'><span>&#10092;</span></div>
            
        </nav>

        <div class = 'headerRightGroup'>

            @if( $user['status'] == config( 'user_statuses.admin' ) )
            <a href = "{{ route('admin', ['locale' => $locale ]) }}" title = 'admin' class = 'adminlink' target = '_blank'>А</a>
            <a href = "{{ route('integration_frame_docs', ['locale' => $locale ]) }}" title = 'admin' class = 'adminlink' target = '_blank'>D</a>
            @endif

            @if( $currentPage == 'editor' )
            <div id = 'downloadButtonWrapper'>
                <div class = 'downloadButton' id = 'downloadButton'>
                    <span>@lang('projects.GoToDownload')</span>
                </div>
            </div>
            @endif

            <div id = 'localeSelect'>
                <ul>

                    <li class = ''>
                        <span>
                            <!-- <span class = "{{ 'imgLang '.$locale }}"></span> -->
                            <span class = 'titleLang'>{{ config( 'app.languageLIst.'.$locale ) }}</span>
                        </span>
                    </li>

                    @foreach( $localeLink as $key => $value )
                    <li class = 'localeList'>
                        <a href = "{{ $localeLink[ $key ]['route'] }}" title = "{{ $localeLink[ $key ]['linkTitle'] }}" >
                            <!-- <span class = 'imgLang en'></span> -->
                            <span class = 'titleLang'>{{ $localeLink[ $key ]['linkTitle'] }}</span>
                        </a>
                    </li>
                    @endforeach




    
                </ul>
            </div>

            @if( $user['isAuth'] )
            <div class = 'userImfoMenu' id = 'userImfoMenu'>
                <div class = 'emailButton'>
                    <span class = 'email'>{{ $user['email'] }}</span>
                    <span class = 'arrow icon-down-dir'></span>
                </div>
                <div class = 'userImfoList'>
                    <ul>
                        <li>
                            <span class = 'userMenuIcon icon-user-2'></span>
                            <span class = 'userMenuitem'>{{ $user['name'] }}</span>
                        </li>

                        @if( $user['status'] == config( 'user_statuses.admin' ) || $user['status'] == config( 'user_statuses.designer' ) )
                        <li>
                            <span class = 'userMenuIcon icon-star-empty-2'></span>
                            <span class = 'userMenuitem'>{{ $user['status'] }}</span>
                        </li>
                        @endif
                        
                        <li class = 'hovered'>
                            <a href = "{{ route('logout', [$locale])  }}" title = ''logout>
                                <span class = 'userMenuIcon icon-export'></span>
                                <span class = 'userMenuitem'>@lang('topMenu.Logout')</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            @else
            <a class = "{{ $currentPage == 'login'?'singInButton active': 'singInButton' }}" href = "{{ route('login', [$locale]) }}" title = 'signin'>
                <span class = 'titleForMenu' >
                    <span class = 'titleForMenuIcon icon-export' ></span>
                    <span class = 'titleForMenuText'>@lang('topMenu.SignIn')</span>
                </span>
            </a>
            @endif

        </div>

    </hgroup>
</header>
<div class = 'headerPlug'><div></div></div>
