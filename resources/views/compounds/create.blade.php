@extends('layouts.base')

@section('content-header')
    <h1>
        Compounds
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
				<form class="form-inputs" id="compound-form" action="{{ route('compounds.store') }}" data-parsley-validate="true" method="post">
					@include('compounds._form')
				</form>
			</div>
			<!-- form -->
		</div>
		<!-- forms div -->
	</div>
</div>
@stop
