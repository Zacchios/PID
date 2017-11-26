{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('mouseid', 'Mouseid:') !!}
			{!! Form::text('mouseid') !!}
		</li>
		<li>
			{!! Form::label('maxdpi', 'Maxdpi:') !!}
			{!! Form::text('maxdpi') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::label('buttonnumber', 'Buttonnumber:') !!}
			{!! Form::text('buttonnumber') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}