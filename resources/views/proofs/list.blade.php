@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Provas</div>
				
					
                <div class="panel-body">
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">Lista de Provas</div>
						<div class="panel-body">
							<p>Provas</p>
						</div>

						<!-- Table -->
						<table class="table">
							<th>
								<td>id</td>
								<td>tipo de prova</td>
								<td>e-mail</td>
							</th>
							<tbody>
								@foreach($proofs as $proof)
									<tr>
										<td></td>
										<td>{{$proof->id}}</td>
										<td>{{$proof->tipo_de_prova}}</td>
										<td>{{$proof->email}}</td>
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
