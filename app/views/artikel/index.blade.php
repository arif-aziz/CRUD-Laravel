@extends('layout.master')

@section('container')

<div id="content" class="span10">

	@foreach ($artikel as $valArtikel)
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-font"></i> {{ $valArtikel->judul }}</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				  <div class="page-header">
					  <h2>{{ $valArtikel->judul }} <small>Oleh: {{ $valArtikel->username }}</small></h2>
				  </div>     
				  <div class="row-fluid ">            
					  <div class="span12">
						<h4>{{ $valArtikel->tanggal }}</h4>
						<p>{{ $valArtikel->isi }}</p>
				  </div><!--/row -->
			  </div>
		</div><!--/span-->
	</div>
	@endforeach

</div><!--/#content.span10-->
@endsection