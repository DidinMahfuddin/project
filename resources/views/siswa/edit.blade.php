@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('siswa.update',$siswa->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orang Tua</label>
					<select class="form-control" name="ortu">
					@foreach($ortu as $b)
					<option value="{{$b->id}}">{{$b->nama_ayah}} dan {{$b->nama_ibu}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="c" class="form-control" value="{{$siswa->umur}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="radio" name="d" value="Laki-laki" required=""{{$siswa->jenis_kelamin=='Laki-laki'?'checked':''}}>Laki-laki
					<input type="radio" name="d" value="Perempuan" required=""{{$siswa->jenis_kelamin=='Perempuan'?'checked':''}}>Perempuan
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="e" class="form-control" value="{{$siswa->alamat}}" required="">{{$siswa->alamat}}</textarea>
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