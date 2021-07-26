<?php

class ArtikelController extends BaseController {

	public function getIndex()
	{
		$dataArtikel 	= Artikel::join('m_user', 'm_user.id_user', '=', 'm_artikel.id_user')
								 ->get();

		return View::make('artikel.index')
                   ->with(array(
                                'artikel' => $dataArtikel
                     ));
	}

	public function getCreate()
	{
		$dataArtikel 	= Artikel::where('id_user', Auth::user()->id_user)
								 ->get();

		return View::make('artikel.create')
                   ->with(array(
                                'artikel' => $dataArtikel
                     ));
	}

	public function postCreate()
	{
		$dataArtikel = array(
            'id_user'   => Auth::user()->id_user,
            'judul'     => Input::get('txt-judul'),
            'tanggal'   => Input::get('txt-tanggal'),
            'isi'		=> Input::get('txt-isi')
        );

        Artikel::create($dataArtikel);

        return Redirect::to('create')
                       ->with('flash_success', 'Artikel telah ditambahkan');
	}

	public function getView( $idArtikel )
	{
		$dataMatchArtikel 	= Artikel::join('m_user', 'm_user.id_user', '=', 'm_artikel.id_user')
								 ->where('id_artikel', $idArtikel)
								 ->firstOrFail();

		return View::make('artikel.view')
                   ->with(array(
                                'matchArtikel' => $dataMatchArtikel
                     ));
	}

	public function getUpdate( $idArtikel )
	{
		$dataArtikel 	= Artikel::where('id_user', Auth::user()->id_user)
								 ->get();

		$dataMatchArtikel 	= Artikel::where('id_artikel', $idArtikel)
								 ->firstOrFail();

		return View::make('artikel.update')
                   ->with(array(
                                'artikel' => $dataArtikel,
                                'matchArtikel' => $dataMatchArtikel
                     ));
	}

	public function postUpdate( $idArtikel )
	{
		Artikel::where('id_artikel', $idArtikel)
			   ->update(array(
                            'judul'     => Input::get('txt-judul'),
                            'tanggal'   => Input::get('txt-tanggal'),
                            'isi' 		=> Input::get('txt-isi')
                     ));

		return Redirect::to('create')
                       ->with('flash_success', 'Artikel telah diperbarui');
	}

	public function getDelete( $idArtikel )
	{
		Artikel::where('id_artikel', $idArtikel)
			   ->delete();

		return Redirect::to('create')
                       ->with('flash_success', 'Artikel telah dihapus');
	}

}