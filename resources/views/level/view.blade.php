@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Organizational Charts</div>

				<div class="panel-body">
				<div id="show_orgz"></div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
	
		<script type="text/javascript">

			$("#show_orgz").getOrgChart({

				primaryColumns: ["name", "title"],
				orientation:3,
				dataSource:[
					@foreach($data as $key)

					{ id:{{$key->id}},
						parent:{{ ($key->parent==0)?'null':$key->parent }},
						name:'{{$key->nama}}',
						title:'{{$key->posisi}}' },

					@endforeach

					],
					boxesColor: [
					{ id: 2, color: "blue"},
					{ id: 4, color: "teal" }
					
				]
			});

			$("#show_orgz a, .get-oc-tb"). remove();
			$(".get-oc-c").css('top',0);
			$(".get-oc-c").css('height',$("#show_orgz").css("height"));
		</script>
@endsection