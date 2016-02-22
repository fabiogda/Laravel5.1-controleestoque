<br>
<div class="form-group">
	{!!Form::label('name','Categoria do Produto')!!}
	{!!Form::select('category_id',$category)!!}
</div>
<div class="form-group">
	{!!Form::label('Name','Nome:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nome do produto'])!!}
</div>
<div class="form-group">
	{!!Form::label('price','Preço:')!!}
	{!!Form::text('price',null,['class'=>'form-control', 'placeholder'=>'Preço do produto '])!!}
</div>
<div class="form-group">
	{!!Form::label('description','Descrição:')!!}
	{!!Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Descrição do produto'])!!}
</div>
<div class="form-group">
	{!!Form::label('poster','Selecionar imagem')!!}
	{!!Form::file('path',['class'=>'file-loading'])!!}
</div>
