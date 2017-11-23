{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('screenid', 'Screenid:') !!}
			{!! Form::text('screenid') !!}
		</li>
		<li>
			{!! Form::label('thumbscreen', 'Thumbscreen:') !!}
			{!! Form::text('thumbscreen') !!}
		</li>
		<li>
			{!! Form::label('format', 'Format:') !!}
			{!! Form::text('format') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}