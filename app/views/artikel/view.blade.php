@extends('layout.master')

@section('container')

<div id="content" class="span10">

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-font"></i> {{ $matchArtikel->judul }}</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				  <div class="page-header">
					  <h2>{{ $matchArtikel->judul }} <small>Oleh: {{ $matchArtikel->username }}</small></h2>
				  </div>     
				  <div class="row-fluid ">            
					  <div class="span12">
						<h4>{{ $matchArtikel->tanggal }}</h4>
						<p>{{ $matchArtikel->isi }}</p>
					  </div>
				  </div><!--/row -->
			  </div>
		</div><!--/span-->
	</div>

</div><!--/#content.span10-->
@endsection