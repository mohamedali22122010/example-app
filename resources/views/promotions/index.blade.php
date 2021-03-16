@extends('layouts.base')

@section('content-header')
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <h4><strong> Promotions </strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <span><a href="{{ route('promotions.create') }}" class="btn btn-primary" data-toggle="tooltip"
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
                    <table class="table table-bordered table-striped table-hover dataTable" id="promotions-table">
                        <thead>
                            <th>Name</th>
                            <th>Property</th>
                        </thead>
                        <tbody>
                        @if($promotions && count($promotions) > 0)
                            @foreach($promotions as $key=>$promotion)
                                    <tr id="{{$promotion->id}}" class="@if($key % 2 == 0) even @else odd @endif ">
                                        <td>{!! $promotion->name !!}</td>
                                    </tr>
                                    @foreach($promotion->properties->take(30) as $property)
                                    <tr>
                                    <td></td>
                                        <td>{!! $property->name !!}</td>
                                    </tr>
                                    @endforeach

                            @endforeach
                        @else
                            <tr>
                                <td id="no-record-founded" colspan="2">no records founded</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <!-- /.box-body -->
                    {{$promotions->render()}}
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
