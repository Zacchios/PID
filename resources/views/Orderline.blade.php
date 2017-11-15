{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('quantity', 'Quantity:') !!}
			{!! Form::text('quantity') !!}
		</li>
		<li>
			{!! Form::label('orderid', 'Orderid:') !!}
			{!! Form::text('orderid') !!}
		</li>
		<li>
			{!! Form::label('productid', 'Productid:') !!}
			{!! Form::text('productid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}