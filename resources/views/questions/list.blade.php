@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Questoes</div>
				
					
                <div class="panel-body">
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">Lista de Questoes</div>
						<div class="panel-body">
							<p>Questoes</p>
						</div>

						<!-- Table -->
						<table class="table">
							<th>
								<td>Descricao</td>
								<td>Tipo</td>
								<td>Peso</td>
								<td>Usuario</td>
								<td></td>
								<td></td>

							</th>
							<tbody>
								@foreach($questions as $question)
									<tr>
										<td></td>
										<td>{{$question->descricao}}</td>
										<td>{{$question->tipo}}</td>
										<td>{{$question->peso}}</td>
										<td>{{$question->user_id}}</td>
										<td> <small><a href="questions/editar/<?php echo $question->id; ?>" title="Editar">Editar</a></small></td>
										<td><small><a href="questions/remover/<?php echo $question->id; ?>" title="Remover">Remover</a></small></td>

									</tr>
								@endforeach	
							</tbody>
							
						</table>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"><a href="questions/create/" title="CadastrarQuestao">Cadastrar Questoes</a></i> Cadastrar Questao
								</button>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
