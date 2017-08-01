@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-default">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right"><a href="/siswa/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Siswa</th>
						<th>Nama Orangtua</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($siswas as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->ortu->nama_ayah}} dan 
							{{$data->ortu->nama_ibu}}</td>
						<td>{{$data->umur}}</td>
						<td>{{$data->alamat}}</td>
						<td><a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a></td>
							<td><a class="btn btn-default" href="/siswa/{{$data->id}}">Show</a></td>
							<td><form action="{{route('siswa.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
@endsection