@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				<form method="POST" action="{{ url('level/add') }}">
				<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<table class="table">
							<tr>
									<td>Parent</td>
									<td><select name="parent" class="form-control">
										@foreach($data as $key)
											<option value="{{ $key->id }}">
											{{ $key->nama }}
											</option>
										@endforeach
									</select></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td><input name="nama" class="form-control"></td>
									</tr>
									<tr>
										<td>Posisi</td>
										<td><input name="posisi" class="form-control"></td>
									</tr>
									<tr>
										<td></td>
										<td><button class="btn btn-primary">
											Submit
										</button> 	
									</td>
								</tr>
						</table>
					</form>
				</div>						
			</div>
		</div>
	</div>
</div>
	</div>

@endsection
