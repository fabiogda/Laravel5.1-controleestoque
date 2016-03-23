<div class="form-group">
	<b>Status</b>
	<ul class="nav nav-pills">
		<li>
		{!!Form::label('activated',' Ativo', ['class' => 'fa fa-eye'])!!}
		{!!Form::radio('activated', '1',true)!!}
		</li>
		<li>
		{!!Form::label('Inativo',' Inativo',['class' => 'fa fa-eye-slash'])!!}
		{!!Form::radio('activated', '0',false)!!}
		</li>
	</ul>
</div>
	<div class="form-group">
		{!!Form::label('name','Nome:')!!}
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
