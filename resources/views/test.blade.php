@extends("layouts.app")

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<div id="app">

				<ul>
					<h2>All tasks</h2>
					<li v-for="task in tasks">
						<input type="checkbox" v-model="task.completed" style="margin-right: 5px;">
						@{{ task.description }}
					</li>

					<h2>Completed tasks</h2>
					<li v-for="task in completedTasks">@{{ task.description }}</li>

					<h2>Uncompleted tasks</h2>
					<li v-for="task in uncompletedTasks">@{{ task.description }}</li>
				</ul>

			</div>

		</div>
		
	</div>
	
</div>			

@endsection