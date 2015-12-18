@extends('layouts.app')

@section('content')
	<div class="container">

		<!-- Current Tasks -->
		@if (count($mydatas) > 0)
			<div class="panel panel-default">
				<div class="panel-heading">
					Current Tasks
				</div>

				<div class="panel-body">
					<table class="table table-striped task-table">
						<thead>
						<th>MyData</th>
						<th>&nbsp;</th>
						</thead>
						<tbody>
						@foreach ($mydatas as $mydata)
							<tr>
								<td class="table-text"><div>{{ $mydatas->name }}</div></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		@endif
	</div>
@endsection
