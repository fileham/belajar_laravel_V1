<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Tutorial Membuat Pagination Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<style type="text/css">
					.pagination li{
					float: left;
					list-style-type: none;
					margin:5px;
					}
				</style>

				<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
				<h3>Data Pegawai</h3>
				
				<p>Cari Data Pegawai</p>
				
				<div class="form-group">			
					<form action="/pegawai/cari" method="GET" class="form-inline">
						<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai.." value="{{old('cari')}}">
						<input class="btn btn-primary ml-3" type="submit" value="CARI">
					</form>
				</div>
				<table class="tbale table-bordered">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
						<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
										<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>


				{{ $pegawai->links() }}
			
			</div>
		</div>
	</div>

	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>