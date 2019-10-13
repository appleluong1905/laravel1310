@extends('layouts.backend')
@section('content')
	<h2>List product here</h2>
	@foreach($products as $product)
		{{$product->title}} - {{$product->price}} {!!'<br>'!!}
	@endforeach
	<p>
		<a href="{{Route('add_product')}}">Add product</a>
	</p>
@endsection
