<div class="form-group">
		{!!Form::label('Nome','Nome:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nome'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','E-mail:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'exemplo@exemplo.com.br'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Senha:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Password'])!!}
	</div>
