{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('peripheriqueid', 'Peripheriqueid:') !!}
			{!! Form::text('peripheriqueid') !!}
		</li>
		<li>
			{!! Form::label('typeid', 'Typeid:') !!}
			{!! Form::text('typeid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}