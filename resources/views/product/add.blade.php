@extends('layouts.backend')
@section('content')
	<h2>Add product</h2>
	<form action="{{Route('add_product')}}" method="POST">
		<!-- Tao token khi add san pham -->
		@csrf
		<!-- End tao token khi add san pham -->
		<input type="text" name="title">
		<input type="text" name="price">
		<input type="submit" name="add" value="Add product">
	</form>
@endsection	