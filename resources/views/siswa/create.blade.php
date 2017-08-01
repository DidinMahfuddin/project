@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('siswa.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orang</label>
					<select class="form-control" name="ortu">
					@foreach($ortu as $b)
					<option value="{{$b->id}}">{{$b->nama_ayah}} dan {{$b->nama_ibu}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="c" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="radio" name="d" required="" value="Laki-laki">Laki-Laki
					<input type="radio" name="d" required="" value="Perempuan">Perempuan
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="e" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection