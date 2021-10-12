@extends('layouts.dash')
@section('content')
<body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column ">
        <div id="content ">
          @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
				   @endif
          <div class="container-fluid  " >
            


            
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
@endsection
