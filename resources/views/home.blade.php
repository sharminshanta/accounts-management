@extends('layouts.application')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <!-- START widget-->
            <div class="panel bg-info-light pt b0 widget">
                <div class="ph">
                    <em class="icon-cloud-upload fa-lg pull-right"></em>
                    <div class="h2 mt0">1700</div>
                    <div class="text-uppercase">Uploads</div>
                </div>
                <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#23b7e5" data-chart-range-min="0" data-fill-color="#23b7e5" data-spot-color="#23b7e5" data-min-spot-color="#23b7e5" data-max-spot-color="#23b7e5"
                     data-highlight-spot-color="#23b7e5" data-highlight-line-color="#23b7e5" values="2,5,3,7,4,5" style="margin-bottom: -2px" data-resize="true"></div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <!-- START widget-->
            <div class="panel widget bg-purple-light pt b0 widget">
                <div class="ph">
                    <em class="icon-globe fa-lg pull-right"></em>
                    <div class="h2 mt0">700
                        <span class="text-sm text-white">GB</span>
                    </div>
                    <div class="text-uppercase">Quota</div>
                </div>
                <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#7266ba" data-chart-range-min="0" data-fill-color="#7266ba" data-spot-color="#7266ba" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                     data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" values="1,4,5,4,8,7,10" style="margin-bottom: -2px" data-resize="true"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <!-- START widget-->
            <div class="panel widget bg-info-light pt b0 widget">
                <div class="ph">
                    <em class="icon-bubbles fa-lg pull-right"></em>
                    <div class="h2 mt0">500</div>
                    <div class="text-uppercase">Reviews</div>
                </div>
                <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#23b7e5" data-chart-range-min="0" data-fill-color="#23b7e5" data-spot-color="#23b7e5" data-min-spot-color="#23b7e5" data-max-spot-color="#23b7e5"
                     data-highlight-spot-color="#23b7e5" data-highlight-line-color="#23b7e5" values="4,5,3,10,7,15" style="margin-bottom: -2px" data-resize="true"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <!-- START widget-->
            <div class="panel widget bg-purple-light pt b0 widget">
                <div class="ph">
                    <em class="icon-pencil fa-lg pull-right"></em>
                    <div class="h2 mt0">35</div>
                    <div class="text-uppercase">Annotations</div>
                </div>
                <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#7266ba" data-chart-range-min="0" data-fill-color="#7266ba" data-spot-color="#7266ba" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                     data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" values="1,3,4,5,7,8" style="margin-bottom: -2px" data-resize="true"></div>
            </div>
        </div>
    </div>
    <!-- END widgets box-->
    <!-- START chart-->
    <div class="row">
        <div class="col-lg-12">
            <!-- START widget-->
            <div id="panelChart9" class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Event Chart</div>
                </div>
                <div collapse="panelChart9" class="panel-wrapper">
                    <div class="panel-body">
                        <div class="chart-splinev3 flot-chart"></div>
                    </div>
                </div>
            </div>
            <!-- END widget-->
        </div>
    </div>
@endsection