@extends('layout.master')

@section('container')

<?php $idx=1; ?>

<div id="content" class="span10">

	<div class="row-fluid sortable">		
		<div class="box span6">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-user"></i> Daftar Artikel</h2>
			</div>
			@if (Session::has('flash_error'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Gagal!</strong> {{ Session::get('flash_error') }}
			</div>
			@endif

			@if (Session::has('flash_success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Berhasil!</strong> {{ Session::get('flash_success') }}
			</div>
			@endif
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th>No.</th>
						  <th>Judul</th>
						  <th>Tanggal</th>
						  <th>Aksi</th>
					  </tr>
				  </thead>   
				  <tbody>
				  	@foreach ( $artikel as $valArtikel )
					<tr>
						<td>{{ $idx++ }}</td>
						<td class="center"><a href="{{ URL::to('view', $valArtikel->id_artikel) }}">{{ $valArtikel->judul }}</a></td>
						<td class="center">{{ $valArtikel->tanggal }}</td>
						<td class="center">
							<a class="btn btn-info" href="{{ URL::to('update', $valArtikel->id_artikel) }}">
								<i class="icon-edit icon-white"></i></a>
							<a class="btn btn-danger" href="{{ URL::to('delete', $valArtikel->id_artikel) }}">
								<i class="icon-trash icon-white"></i></a>
						</td>
					</tr>
					@endforeach
				  </tbody>
			  </table>            
			</div>
		</div><!--/span-->

		<div class="box span6">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-user"></i> Input Artikel</h2>
			</div>
			<div class="box-content">
				<form action="{{ URL::to('create') }}" method="POST" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="focusedInput">Judul</label>
							<div class="controls">
								<input class="input-xlarge" name="txt-judul" type="text">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="focusedInput">Tanggal</label>
							<div class="controls">
								<input type="text" name="txt-tanggal" class="input-xlarge datepicker" id="date01" value="{{ date('Y-m-d') }}">
							</div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="textarea2">Isi</label>
						  	<div class="controls">
								<textarea id="textarea2" name="txt-isi" rows="10"></textarea>
						  	</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn">Batal</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div><!--/span-->
	
	</div><!--/row-->

</div><!--/#content.span10-->
@endsection