{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('desktopid', 'Desktopid:') !!}
			{!! Form::text('desktopid') !!}
		</li>
		<li>
			{!! Form::label('typeid', 'Typeid:') !!}
			{!! Form::text('typeid') !!}
		</li>
		<li>
			{!! Form::label('processor', 'Processor:') !!}
			{!! Form::text('processor') !!}
		</li>
		<li>
			{!! Form::label('graphiccard', 'Graphiccard:') !!}
			{!! Form::text('graphiccard') !!}
		</li>
		<li>
			{!! Form::label('thumbscreen', 'Thumbscreen:') !!}
			{!! Form::text('thumbscreen') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}