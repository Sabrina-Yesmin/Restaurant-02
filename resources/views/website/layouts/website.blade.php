<!doctype html>
<html lang="en">
<head>

    @include('website.includes.whead')
    {{-- @yield('links') --}}

</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

    @include('website.includes.wtopbar')

	<!-- LOGO Start
    ================================================== -->
    @include('website.includes.wlogo')


    @include('website.includes.msg')

	<!-- MENU Start
    ================================================== -->

	@include('website.includes.menu')

	<!-- SLIDER Start
    ================================================== -->
    @yield('content')






	<!-- FOOTER Start
    ================================================== -->

	@include('website.includes.firstfooter')



	<!-- FOOTER-BOTTOM Start
    ================================================== -->
    @include('website.includes.lastfooter')


	<a id="back-top" href="#"></a>
</body>
</html>
