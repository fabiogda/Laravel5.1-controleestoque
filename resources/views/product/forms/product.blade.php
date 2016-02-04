<div class="form-group">
	{!!Form::label('Name','Nome:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Insira nome do produto..'])!!}
</div>
<div class="form-group">
	{!!Form::label('price','Preço:')!!}
	{!!Form::text('price',null,['class'=>'form-control', 'placeholder'=>'Insira Preço do produto '])!!}
</div>
<div class="form-group">
	{!!Form::label('quantity','Quantidade:')!!}
	{!!Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Digite a quantidade desse produto'])!!}
</div>
<div class="form-group">
	{!!Form::label('description','Descrição:')!!}
	{!!Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Insira a descrição do produto'])!!}
</div>
<div class="form-group">
	{!!Form::label('poster','Imagen do Produto:')!!}
	{!!Form::file('path')!!}
</div>
