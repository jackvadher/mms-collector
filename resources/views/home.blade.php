@extends('layouts.app')

@section('style')
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Dashboard
            <small>dashboard & statistics</small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route("mms-log")}}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{$AllMms->count()}}">{{ $AllMms->count() }}</span>
                </div>
                <div class="desc"> Total MMS </div>
            </div>
        </a>
    </div>

</div>
@endsection

@section('script')
<script src="assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
@endsection
