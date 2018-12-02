<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.head')
</head>
<body>
	<div class="wrapper">
		@include('layouts.sidebar')

		<div class="main-panel">

			@include('layouts.topnav')

			@yield('content')
			
			@include('layouts.footer')
		</div>
	</div>
</body>
		@include('layouts.foot')
		@include('layouts.modals');
		{{-- <script type="text/javascript">
    	$(document).ready(function(){
    		//call js
        	//demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

        // Google Map
	        //  $().ready(function(){
	        //     demo.initGoogleMaps();
	        // });
    	});
	</script> --}}
</html>