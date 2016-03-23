<div class="form-group">
	<b>Status</b>
	<ul>
		<li>
			{!!Form::label('activated',' Ativo', ['class' => 'fa fa-eye'])!!}
			{!!Form::radio('activated', '1', true)!!}
		</li>
		<li>
				{!!Form::label('activated',' inativo',['class' => 'fa fa-eye-slash'])!!}
				{!!Form::radio('activated', '0', false)!!}
		</li>
	</ul>
</div>
<div class="form-group">
		{!!Form::label('name','Nome da Categoria')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nome'])!!}
	</div>
