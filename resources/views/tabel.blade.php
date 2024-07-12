@extends('app')

@section('content')
<div class="container mt-5">
	<h1 class="text-center my-3">Multiple Input dengan Gambar</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<div class="responsive">
						<table class="table hovered">
							<thead>
								<tr>
									<th>No</th>
									<th>Gambar</th>
									<th>Merk Laptop</th>
									<th>Harga</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $i)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td><img src="{{ asset('storage/iamges/'.$i->gambar) }}" alt="" style="width: 100px;"></td>
									<td>{{ $i->nama }}</td>
									<td>{{ $i->harga }}</td>
									<td>
										<form action="/{{ $i->id }}" method="post" class="d-inline mx-1">
											@csrf
											@method('GET')
											<button class="btn btn-success mb-1"><i class="fas fa-eye"></i></button>
										</form>

										<form action="/{{ $i->id }}/edit" method="post" class="d-inline mx-1">
											@csrf
											@method('GET')
											<button class="btn btn-info mb-1" type="submit"><i class="fas fa-edit"></i></button>
										</form>

										<form action="/{{ $i->id }}" method="post" class="d-inline mx-1">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger mb-1" type="submit"
											onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
											<i class="fas fa-trash"></i>
											</button>
										</form>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection