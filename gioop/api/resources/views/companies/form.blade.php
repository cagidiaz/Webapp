<form class="form-horizontal" role="form" method="POST" action="{{ url('/stores/create') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label class="col-md-4 control-label">Nombre</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="name" value="{{ old('name') }}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Nif</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="nif" value="{{old('nif')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Dirección</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="address" value="{{old('address')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Código Postal</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="postal_c" value="{{old('postal_c')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Latitud</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="s_lat" value="{{old('s_lat')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Longitud</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="s_long" value="{{old('s_long')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Teléfono</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="phone" value="{{old('phone')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Email</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="email" value="{{old('email')}}">
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('cat_id', 'Categoría', ['class'=>'col-md-4 control-label']) !!}
		<div class="col-md-6">
			{!! Form::select('cat_id', $categs, null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">URL</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="s_url" value="{{old('s_url')}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Descuento %</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="discount" value="{{old('discount')}}">
		</div>
	</div>

	<div class="form-group required">
		{!! Form::label('logo', 'Logo', ['class'=>'col-md-4 control-label']) !!}
		<div class="col-md-6">
			{!! Form::file('logo', ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">USERID</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="user_id" value="{{1}}">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">
				Crear Comercio
			</button>
		</div>
	</div>
</form>