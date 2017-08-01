@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orang Tua</label>
					<input type="text" name="b" class="form-control" value="{{$siswa->ortu->nama_ayah}} dan {{$siswa->ortu->nama_ibu}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="c" class="form-control" value="{{$siswa->umur}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="text" name="c" class="form-control" value="{{$siswa->jenis_kelamin}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="e" class="form-control" value="{{$siswa->alamat}}" readonly="">{{$siswa->alamat}}</textarea>
				</div>
		</div>
	</div>
</div>
@endsection