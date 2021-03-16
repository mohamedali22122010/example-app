@extends('layouts.base')

@section('content-header')
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <h4><strong> Properties </strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <span><a href="{{ route('properties.create') }}" class="btn btn-primary" data-toggle="tooltip"
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
                    <table class="table table-bordered table-striped table-hover dataTable" id="properties-table">
                        <thead>
                            <th>Name</th>
                            <th>Building</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @if($properties && count($properties) > 0)
                            @foreach($properties as $key=>$property)
                                    <tr id="{{$property->id}}" class="@if($key % 2 == 0) even @else odd @endif ">
                                    <td>{!! $property->name !!}</td>
                                    <td>{!! $property->building->name !!}</td>
                                    <td>
                                    <a href="{{ route('properties.edit', [$property->id]) }}"
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
                    {{$properties->render()}}
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
