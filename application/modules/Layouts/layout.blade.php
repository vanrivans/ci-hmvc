@php
$CI = &get_instance();
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
    <meta name="theme-color" content="#006352" />

    <!-- URL Theme Color untuk Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#006352" />

    <!-- URL Theme Color untuk iOS Safari -->
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <meta name="author" content="<?= empty($Author) ? '' : $Author; ?>">
    <meta name="Keywords" content="<?= empty($MetaKeywords) ? '' : $MetaKeywords; ?>">
    <meta name="description" content="<?= empty($MetaDescription) ? '' : $MetaDescription; ?>">

    <meta property="og:type" content="website" />

    <meta property="og:url" content="<?= empty($Url) ? '' : $Url; ?>" />
    <meta property="og:title" content="<?= empty($PageTitle) ? '' : $PageTitle; ?>" />
    <meta property="og:site_name" content="<?= empty($SiteName) ? '' : $SiteName; ?>" />
	<meta property="og:image" content="<?= empty($Image) ? '' : $Image; ?>">

    <title><?= empty($PageTitle) ? '' : $PageTitle; ?></title>

    <link rel="shortcut icon" href="{{ base_url('assets/logo/logo.png') }}" />
    <link href="{{ base_url('assets/logo/logo.png') }}" rel='icon' type='image/x-icon'/>

    {{-- Custom link css --}}
    @include('Layouts.config._css-link')

</head>
<body style="overflow-x:hidden">

	@yield('navbar')

	@yield('cover')

    {{-- Header & Body --}}
    <div class="container-fluid" style="z-index:1">

        <div class="row">

            <div class="col-12 p-0">
                
                <div class="container-fluid p-0">
                    @yield('header')
                </div>
            
                @yield('main')

            </div>

        </div>

    </div>

    {{-- Footer --}}
    @include('Layouts.config._footer')

    {{-- For Cutom Link Js --}}
    @include('Layouts.config._js-link')

    {{-- For Script --}}
    @yield('script')
    
</body>
</html>
