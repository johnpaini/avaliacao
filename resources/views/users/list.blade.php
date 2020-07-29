@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>
				
					
                <div class="panel-body">
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">Lista de Usuarios</div>
						<div class="panel-body">
							<p>Usuarios</p>
						</div>

						<!-- Table -->
						<table class="table">
							<th>
								<td>id</td>
								<td>nome</td>
								<td>e-mail</td>
								<td></td>
								<td></td>
							</th>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td></td>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td> <small><a href="users/editar/<?php echo $user->id; ?>" title="Editar">Editar</a></small></td>
										<td><small><a href="users/remover/<?php echo $user->id; ?>" title="Remover">Remover</a></small></td>
									</tr>
								@endforeach	
							</tbody>
							
						</table>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
