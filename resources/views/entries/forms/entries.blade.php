<div class="form-group">
	{!!Form::label('product_id','Nome do produto')!!}
	{!!Form::select('product_id',$product)!!}
</div>
<div class="form-group">
	{!!Form::label('quantity','Quantidade')!!}
	{!!Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Quantidade de produto'])!!}
</div>
