@extends('layouts.base')

@section('content-header')
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <h4><strong> Buildings </strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <span><a href="{{ route('buildings.create') }}" class="btn btn-primary" data-toggle="tooltip"
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
                    <table class="table table-bordered table-striped table-hover dataTable" id="buildings-table">
                        <thead>
                            <th>Name</th>
                            <th>Compound</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @if($buildings && count($buildings) > 0)
                            @foreach($buildings as $key=>$building)
                                    <tr id="{{$building->id}}" class="@if($key % 2 == 0) even @else odd @endif ">
                                    <td>{!! $building->name !!}</td>
                                    <td>{!! $building->compound->name !!}</td>
                                    <td>
                                    <a href="{{ route('buildings.edit', [$building->id]) }}"
                                                   class='btn btn-default btn-sm' data-toggle="tooltip"
                                                   title="Edit"><i class="glyphicon glyphicon-edit"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td id="no-record-founded" colspan="3">no records founded</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <!-- /.box-body -->
                    {{$buildings->render()}}
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
