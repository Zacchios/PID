{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('padid', 'Padid:') !!}
			{!! Form::text('padid') !!}
		</li>
		<li>
			{!! Form::label('technology', 'Technology:') !!}
			{!! Form::text('technology') !!}
		</li>
		<li>
			{!! Form::label('padnum', 'Padnum:') !!}
			{!! Form::text('padnum') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}