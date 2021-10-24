<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>


	@include('admin.layout.include.headlink')

    @include('admin.layout.include.js')


</head>

<body>
    @include('admin.layout.include.head')

        @include('admin.layout.include.sidebar')

        @yield('content')
        @include('admin.layout.include.footer')



</body>
</html>
