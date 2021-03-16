@extends('layouts.base')

@section('content-header')
    <h1>
        Buildings
    </h1>
@stop

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
	        </div>
			<!-- /.box-header -->
			<div class="box-body">
				<form class="form-inputs" id="building-form" action="{{ route('buildings.store') }}" data-parsley-validate="true" method="post">
					@include('buildings._form')
				</form>
			</div>
			<!-- form -->
		</div>
		<!-- forms div -->
	</div>
</div>
@stop
