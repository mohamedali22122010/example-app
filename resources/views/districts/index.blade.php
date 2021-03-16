@extends('layouts.base')

@section('content-header')
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <h4><strong> Districts </strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <span><a href="{{ route('districts.create') }}" class="btn btn-primary" data-toggle="tooltip"
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
                    <table class="table table-bordered table-striped table-hover dataTable" id="districts-table">
                        <thead>
                            <th>Name</th>
                        </thead>
                        <tbody>
                        @if($districts && count($districts) > 0)
                            @foreach($districts as $key=>$district)
                                    <tr id="{{$district->id}}" class="@if($key % 2 == 0) even @else odd @endif ">
                                    <td>{!! $district->name !!}</td>
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
                    {{$districts->render()}}
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
