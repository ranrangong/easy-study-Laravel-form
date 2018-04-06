@extends('common.layouts')

@section('content')
    @include('common.validata')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-fw fa-plus"></i> 新增学生</div>
        <div class="panel-body">
          @include('student._form')
        </div>
    </div>
    </div>
@stop