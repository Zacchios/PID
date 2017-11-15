{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('firstname', 'Firstname:') !!}
			{!! Form::text('firstname') !!}
		</li>
		<li>
			{!! Form::label('mail', 'Mail:') !!}
			{!! Form::text('mail') !!}
		</li>
		<li>
			{!! Form::label('deliveryadress', 'Deliveryadress:') !!}
			{!! Form::text('deliveryadress') !!}
		</li>
		<li>
			{!! Form::label('bilingadress', 'Bilingadress:') !!}
			{!! Form::text('bilingadress') !!}
		</li>
		<li>
			{!! Form::label('birthdate', 'Birthdate:') !!}
			{!! Form::text('birthdate') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('roleid', 'Roleid:') !!}
			{!! Form::text('roleid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}