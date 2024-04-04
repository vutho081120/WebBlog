<!-- Page Header -->
<div class="mainMenu">
    <!-- menu -->

    <div class="menuFrame">
        <div class="menuTop">
            <ul class="nav">
                <li>
                    <a href="{{ route('site.home.index') }}">
                        <div><img id="logo" src="{{ asset('images\Site\menu2\logoH.png') }}" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">{{ __('Category') }}</a>
                    <ul class="sub-menu">
                        @foreach ($categoryList as $category)
                            <li>
                                <a href="{{ route('site.category.index', Str::slug($category->category_name)) }}">
                                    {{ __($category->category_name) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#">{{ __('Language') }}</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('change-language', 'en') }}">{{ __('English') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('change-language', 'vi') }}">{{ __('Vietnam') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" style="display: flex; align-items: center;"
                        href="{{ route('site.account.loginShow') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-login">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M21 12h-13l3 -3" />
                                <path d="M11 15l-3 -3" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Login') }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="banner_top">
    <!-- top banner -->

    <div id="banner1">
        <img src="{{ asset('images\Site\banner1\anh1.png') }}" alt="">
    </div>
</div>
