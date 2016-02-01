<div class="form-group">
		{!!Form::label('Nome','Nome:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Insira um nome de usuario...'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','email:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Insira um email...'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Senha:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Insira uma senha...'])!!}
	</div>
