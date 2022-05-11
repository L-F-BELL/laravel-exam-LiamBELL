@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<div class="task-list">
		<a href="/">Not sorted</a>
		@foreach($sortedIndex as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/{{ $task->id }}" class="card-footer-item">Show task</a>
			</div>
		</div>
		@endforeach
	</div>
@endsection