
@extends('admin.layouts.app_admin')

@section('content')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></head>
<div class="container">
	<div class="row">
	<div class="col-sm-3">
		<div class="jumbotron">
			<p><span class="label label-primary">Катагерій 0</span></p>
		</div>
		<div class="col-sm-3">
		<div class="jumbotron">
			<p><span class="label label-primary">Матеріалов 0</span></p>
		</div>
		<div class="col-sm-3">
		<div class="jumbotron">
			<p><span class="label label-primary">Гості 0</span></p>
		</div>
		<div class="col-sm-3">
		<div class="jumbotron">
			<p><span class="label label-primary">Сьогодні 0</span></p>
		</div>
	</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<a class="btn btn-block btn-lg" href="#">Створити категорію</a>
			<a class="List-group-item href="#">
				<h4 class="List-group-item-heading">Категорія перша</h4>
				<p class="List-group-item-text">
					К-сть матеріалів
				</p>
			</a>
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-lg" href="#">Створити матеріал</a>
			<a class="List-group-item href="#">
				<h4 class="List-group-item-heading">Материал перша</h4>
				<p class="List-group-item-text">
					Категорія
				</p>
			</a>
		</div>
	</div>
</div>
@endsection