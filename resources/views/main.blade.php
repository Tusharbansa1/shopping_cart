@include('partials._head')
    <body>		
		@include('partials._nav')
		<div id="wrapper" class="container">
			
			@include('partials._category')
			
	
			@yield('content')

			@include('partials._footer')
		</div>
		
		@include('partials._scripts')
    </body>
</html>