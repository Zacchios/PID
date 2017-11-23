{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('reference', 'Reference:') !!}
			{!! Form::text('reference') !!}
		</li>
		<li>
			{!! Form::label('media', 'Media:') !!}
			{!! Form::text('media') !!}
		</li>
		<li>
			{!! Form::label('unitprice', 'Unitprice:') !!}
			{!! Form::text('unitprice') !!}
		</li>
		<li>
			{!! Form::label('stock', 'Stock:') !!}
			{!! Form::text('stock') !!}
		</li>
		<li>
			{!! Form::label('promotion', 'Promotion:') !!}
			{!! Form::text('promotion') !!}
		</li>
		<li>
			{!! Form::label('marqueid', 'Marqueid:') !!}
			{!! Form::text('marqueid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}