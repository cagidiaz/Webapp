@extends( 'layouts.dash' )

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">Crear Comercio</div>
				<div class="panel-body">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> Hay errores en los campos de entrada.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					{!! Form::open(['files' => 'true']) !!}
					@include('companies.form')
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
