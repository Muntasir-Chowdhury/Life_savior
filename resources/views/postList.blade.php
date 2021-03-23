@extends('layouts.custom')

@section('content2')
<div class="container">
    
<div id="app" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
          
          
<example-component2 :user="{{ Auth::user() }}"></example-component2> 
      </div>
         <script type="text/javascript" src="js/app.js"></script>
	</div>
@endsection