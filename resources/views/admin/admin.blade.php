@extends('layouts.design')
@section('content')
  <!-- Page -->
  <div class="page">
    <div class="page-header padding-0">
      <div class="widget widget-article type-flex">
        <div class="widget-header cover overlay">
          <img class="cover-image height-300" src="{{url('images/bg1.jpg')}}"
          alt="">
          <div class="overlay-panel text-center vertical-align">
            <div class="widget-metas vertical-align-middle blue-grey-800">
              <div class="widget-title font-size-50 margin-bottom-35 blue-grey-800">Selamat Datang</div>
              <div class="widget-title font-size-30 margin-bottom-35 blue-grey-800" style="margin-top: -20px;">{{ Auth::user()->nama }}</div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-3 col-lg-4 col-md-12">
          <!-- Panel Web Designer -->
          <div class="widget widget-shadow">
            <div class="widget-content widget-radius text-center bg-white padding-40">
              <div class="avatar avatar-100 margin-bottom-20">
                <img src="{{url('file/foto_profile/'.Auth::user()->foto_profile)}}" alt="" style="height: 100px; width: 100px; border-radius: 100%;">
              </div>
              <p class="font-size-20 blue-grey-700">{{ Auth::user()->nama }}</p>
              <p class="blue-grey-400 margin-bottom-20">
              @if(Auth::user()->role_id == "1")
                Super Admin
              @else
                Admin
              @endif
              </p>
              <p class="margin-bottom-20"><img src="{{url('images/bell.png')}}" alt="Logo" style="max-height: 70px;">
              <p class="margin-bottom-5">Bergabung Sejak</p>
              <br>{{date_format(date_create(Auth::user()->created_at),"d M Y")}}
                </p>
              <a href="{{route('update_admin',Auth::user()->id)}}">
              <button type="button" class="btn btn-success padding-horizontal-40">Edit</button>
              </a>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

        <div class="col-xlg-6 col-lg-8 col-md-12">
          <!-- Panel Traffic -->
          <div class="widget widget-shadow example-responsive" id="widgetLinearea">
            <div class="widget-content bg-white padding-30" style="min-width:480px;">
              <div class="row padding-bottom-20" style="height:calc(100% - 322px);">
                <div class="col-sm-8 col-xs-6">
                  <div class="blue-grey-700">YOUR TRAFFIC VIEWS</div>
                </div>
                <div class="col-sm-4 col-xs-6">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="counter counter-md">
                        <div class="counter-number-group text-nowrap">
                          <span class="counter-number">76</span>
                          <span class="counter-number-related">%</span>
                        </div>
                        <div class="counter-label blue-grey-400">PC Browser</div>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="counter counter-md">
                        <div class="counter-number-group text-nowrap">
                          <span class="counter-number">24</span>
                          <span class="counter-number-related">%</span>
                        </div>
                        <div class="counter-label blue-grey-400">Mobile Phone</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ct-chart margin-bottom-30" style="height:270px;"></div>
              <ul class="list-inline text-center margin-bottom-0">
                <li>
                  <i class="icon wb-large-point blue-200 margin-right-10" aria-hidden="true"></i>                  PC BROWSER
                </li>
                <li class="margin-left-35">
                  <i class="icon wb-large-point teal-200 margin-right-10" aria-hidden="true"></i>                  MOBILE PHONE
                </li>
              </ul>
            </div>
          </div>
          <!-- End Panel Traffic -->
        </div>

        <div class="col-xlg-3 col-md-12">
          <div class="row height-full">
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Overall Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-blue-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>OVERALL SALES</div>
                      <div class="blue-200">Lorem ipsum dolor sit amet</div>
                    </div>
                    <div class="counter-number-group margin-bottom-15">
                      <span class="counter-number-related">$</span>
                      <span class="counter-number">14,000</span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-blue-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="42" role="progressbar">
                          <span class="sr-only">42%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">42%</span>
                          <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>

            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today's Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-red-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>TODAY'S SALES</div>
                      <div class="blue-200">Lorem ipsum dolor sit amet</div>
                    </div>
                    <div class="counter-number-group margin-bottom-10">
                      <span class="counter-number-related">$</span>
                      <span class="counter-number">41,160</span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-red-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="70" role="progressbar">
                          <span class="sr-only">70%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">70%</span>
                          <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Today's Sales -->
            
        </div>
        </div>
        </div>
        </div>
        </div>  
        </div>
<script>
    $(document).ready(function($) {

      Site.run();

      // widget-linearea
      (function() {
        var linearea = new Chartist.Line('#widgetLinearea .ct-chart', {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [0, 2.5, 2, 2.8, 2.6, 3.8, 0],
            [0, 1.4, 0.5, 2, 1.2, 0.9, 0]
          ]
        }, {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 0
          },
          axisX: {
            showGrid: false,
            labelOffset: {
              x: -14,
              y: 0
            },
          },
          axisY: {
            labelOffset: {
              x: -10,
              y: 0
            },
            labelInterpolationFnc: function(num) {
              return num % 1 === 0 ? num : false;
            }
          }
        });
      })();

      //widget-pie-progress
      (function() {
        $("#widgetPieProgress .pieProgress-one").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("primary", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-two").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("cyan", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-three").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("purple", 600),
          trackcolor: $.colors("blue-grey", 100),
        });
      })();

      // widget bar
      (function() {
        var bar = new Chartist.Bar('#widgetBar .ct-chart', {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'],
          series: [
            [160, 200, 150, 400, 460, 440, 240, 250, 50],
            [600 - 160, 600 - 200, 600 - 150, 600 - 400, 600 -
              460, 600 - 440, 600 - 240, 600 - 250, 600 - 50
            ]
          ]
        }, {
          stackBars: true,
          fullWidth: true,
          seriesBarDistance: 0,
          axisX: {
            showGrid: false,
          },
          axisY: {
            showGrid: false,
            labelInterpolationFnc: function(num) {
              return num / 200 % 1 === 0 ? num : false;
            }
          }
        });
      })();

      // widget gmap
      (function() {
        var map = new GMaps({
          el: '#gmap',
          lat: -12.043333,
          lng: -77.028333,
          zoomControl: true,
          zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
          },
          panControl: true,
          streetViewControl: false,
          mapTypeControl: false,
          overviewMapControl: false
        });

        map.addStyle({
          styledMapName: "Styled Map",
          styles: $.components.get('gmaps', 'styles'),
          mapTypeId: "map_style"
        });

        map.setStyle("map_style");
      })();
    });
  </script>

@endsection
