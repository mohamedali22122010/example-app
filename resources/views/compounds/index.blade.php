@extends('layouts.base')

@section('content-header')
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <h4><strong> Compounds </strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <span><a href="{{ route('compounds.create') }}" class="btn btn-primary" data-toggle="tooltip"
                         title="Add New">Add New</a></span>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover dataTable" id="compounds-table">
                        <thead>
                            <th>Name</th>
                            <th>District</th>
                        </thead>
                        <tbody>
                        @if($compounds && count($compounds) > 0)
                            @foreach($compounds as $key=>$compound)
                                    <tr id="{{$compound->id}}" class="@if($key % 2 == 0) even @else odd @endif ">
                                    <td>{!! $compound->name !!}</td>
                                    <td>{!! $compound->district->name !!}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td id="no-record-founded" colspan="2">no records founded</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <!-- /.box-body -->
                    {{$compounds->render()}}
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
