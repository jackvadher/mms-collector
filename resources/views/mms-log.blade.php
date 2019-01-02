@extends('layouts.app')

@section('style')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>MMS Log
            <small>list of MMS Received</small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- BEGIN CHART PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-list font-green-haze"></i>
                    <span class="caption-subject bold uppercase font-green-haze"> MMS Log </span>
                    <span class="caption-helper"></span>
                </div>
                <div class="tools">                    
                </div>
            </div>
            <div class="portlet-body">

                <p>You have received total {{$AllMms->count()}} MMS</p>

                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead >
                        <tr>
                            <th class="all">Date</th>
                            <th class="min-phone-l">From</th>
                            <th class="min-tablet">To</th>
                            <th class="all">Body</th>
                            <th class="all">Number of Media</th>
                            <th class="none">Media</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $AllMms as $key => $value)
                        <tr class="text-center">
                            <td>{{date("Y/m/d",strtotime($value->created_at))}}</td>
                            <td>{{$value->from}}</td>
                            <td>{{$value->to}}</td>
                            <td>{{$value->body}}</td>
                            <td>{{$value->numMedia}}</td>
                            <td>
                                <div class="row">
                                    @foreach(json_decode($value->MediaUrl) as $url_key => $url)
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$url}}" style="width: 100%;">
                                    </div>                                    
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <!-- END CHART PORTLET-->
    </div>

</div>

@endsection

@section('script')
<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

<script src="assets/pages/scripts/table-datatables-responsive.js" type="text/javascript"></script>
@endsection
