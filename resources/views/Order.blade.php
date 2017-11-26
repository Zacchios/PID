{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('orderdate', 'Orderdate:') !!}
			{!! Form::text('orderdate') !!}
		</li>
		<li>
			{!! Form::label('hour', 'Hour:') !!}
			{!! Form::text('hour') !!}
		</li>
		<li>
			{!! Form::label('total', 'Total:') !!}
			{!! Form::text('total') !!}
		</li>
		<li>
			{!! Form::label('indication', 'Indication:') !!}
			{!! Form::text('indication') !!}
		</li>
		<li>
			{!! Form::label('userid', 'Userid:') !!}
			{!! Form::text('userid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}