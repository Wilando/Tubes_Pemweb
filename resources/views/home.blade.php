@extends('layout.main')

@section('container')
	
	<h1>{{ $title }}</h1>
	@foreach ($dataLaporan as $laporan)
	 <p>Pelapor : <a href="/pelapor/{{ $laporan->user->username }}">{{ $laporan->user->name }}</a></p>	
	 <p>{{ $laporan->isi_laporan }}</p>
	 <p>aspek laporan : <a href="/aspek/{{ $laporan->aspek->slug }}">{{ $laporan->aspek->aspek_laporan }}</a> </p>
	 <p>isi Laporan : {{ $laporan->lampiran }}</p>
	 <p>Dibuat Pada : {{ $laporan->created_at->isoFormat('dddd, D MMMM Y') }}</p>
	 <p>Diupdate Pada : {{ $laporan->updated_at->diffForHumans() }}</p>
	 <a href="/laporan/{{ $laporan->id }}">Baca selengkapnya</a>
	 <hr>
	@endforeach

@endsection		