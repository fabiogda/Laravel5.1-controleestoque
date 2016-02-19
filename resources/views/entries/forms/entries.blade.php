<div class="form-group">
	{!!Form::label('name','Nome do produto')!!}
	{!!Form::select('products_id',$product)!!}
</div>
<div class="form-group">
	{!!Form::label('quantity','Quantidade')!!}
	{!!Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Quantidade de produto'])!!}
</div>
