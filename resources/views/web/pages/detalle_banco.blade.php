@extends('web.layout')

@section('styles')
	<style type="text/css">
		.head .bcp-bg-color{
			width: 100%;
		    height: 100px;
		    padding-left: 0;
		    padding-right: 0;		    
		}
		.bcp-bg-color{
			background: rgb(0,72,142);
		}
		.bcp-img img{
			width: 100%;
			height: auto;
		}
	</style>
@endsection

@section('content')
	<section class="module no-padding">
		<!--Cabecera-->
		<div class="head">
			<div class="bcp-bg-color">
				
			</div>
			<div class="bcp-img">
				<img src="{{ asset('images/bancos/portadas/bcp.jpg')}}">
			</div>
		</div>
		
	</section>
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
		});
	</script>
@endsection