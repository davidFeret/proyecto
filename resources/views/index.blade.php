@extends('layouts.app_admin')

@section('title', 'DASILA')

@section('header')

<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
      <a href="index.html" class="navbar-brand"> 
        <b>DASILA</b>
      </a>

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>Akihiko Avaron</span></li>
        <li class="dropdown avatar-dropdown">
          <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
          <ul class="dropdown-menu user-dropdown">
            <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
            <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
            <li role="separator" class="divider"></li>
            <li class="more">
              <ul>
                <li><a href=""><span class="fa fa-cogs"></span></a></li>
                <li><a href=""><span class="fa fa-lock"></span></a></li>
                <li><a href=""><span class="fa fa-power-off "></span></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

@endsection

@section('content')

<div class="container-fluid mimin-wrapper">
  <!-- start:Left Menu -->
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
        <li><div class="left-bg"></div></li>
        {{-- Perfil --}}
        <li class="time" align="center">
          <img src="{{asset('asset/img/avatar3.png')}}" alt="" class="img-circle avatar"
          style="width: 80%; height:80%; margin:5%;">
        </li>
        <li>
          <h3 class="animated fadeInLeft" align="center">Nombre del usuario</h3>
        </li>
        <li class="time">
          <h1 class="animated fadeInLeft">21:00</h1>
          <p class="animated fadeInRight">Sat,October 1st 2029</p>
        </li>
        {{-- Cierre de perfil --}}
        {{-- Opciones --}}
        <li class="active"><a href="#"><span class="fa-home fa"></span>Inicio</a></li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Usuarios 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="#">Agregar usuario</a></li>
            <li><a href="#">Ver usuarios</a></li>
          </ul>
        </li>

        <li class="ripple">
          <a class="tree-toggle nav-header" href="#"><span class="fa-home fa"></span> Productos 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="#">Agregar producto</a></li>
            <li><a href="#">Ver productos</a></li>
          </ul>
        </li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Pedidos</a></li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Ventas</a></li>

        <li class=""><a href="#"><span class="fa-home fa"></span>Configuración</a></li>

      </ul>
    </div>
  </div>
  <!-- end: Left Menu -->



  <!-- start: content -->
  <div id="content">
    <div class="panel">
      <div class="panel-body">
          <div class="col-md-6 col-sm-12">
            <h3 class="animated fadeInLeft">Customer Service</h3>
            <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

            <ul class="nav navbar-nav">
                <li><a href="" >Impedit</a></li>
                <li><a href="" class="active">Virtute</a></li>
                <li><a href="">Euismod</a></li>
                <li><a href="">Explicar</a></li>
                <li><a href="">Rebum</a></li>
            </ul>
          </div>
          
          <div class="col-md-6 col-sm-12">
            <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
              <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Banyumas</h3>
              <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="wheather">
                <div class="stormy rainy animated pulse infinite">
                  <div class="shadow">
                    
                  </div>
                </div>
                <div class="sub-wheather">
                  <div class="thunder">
                    
                  </div>
                  <div class="rain">
                    <div class="droplet droplet1"></div>
                    <div class="droplet droplet2"></div>
                    <div class="droplet droplet3"></div>
                    <div class="droplet droplet4"></div>
                    <div class="droplet droplet5"></div>
                    <div class="droplet droplet6"></div>
                  </div>
                </div>
              </div>
            </div>                   
          </div>
      </div>                    
    </div>

    <div class="col-md-12" style="padding:20px;">
      <div class="col-md-12 padding-0">
        <div class="col-md-8 padding-0">
          <div class="col-md-12 padding-0">
            <div class="col-md-6">
              <div class="panel box-v1">
                <div class="panel-heading bg-white border-none">
                  <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                    <h4 class="text-left">Visit</h4>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                      <h4>
                      <span class="icon-user icons icon text-right"></span>
                      </h4>
                  </div>
                </div>
                <div class="panel-body text-center">
                  <h1>51181,320</h1>
                  <p>User active</p>
                  <hr/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel box-v1">
                <div class="panel-heading bg-white border-none">
                  <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                    <h4 class="text-left">Orders</h4>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                      <h4>
                      <span class="icon-basket-loaded icons icon text-right"></span>
                      </h4>
                  </div>
                </div>
                <div class="panel-body text-center">
                  <h1>51181,320</h1>
                  <p>New Orders</p>
                  <hr/>
                </div>
              </div>
            </div>
          </div>
          {{-- Aquí --}}
          <div class="col-md-12">
            <div class="panel box-v4">
              <div class="panel-heading bg-white border-none">
                <h4><span class="icon-notebook icons"></span> Formulario de ejemplo </h4>
              </div>
              <div class="panel-body padding-0">
                <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">

                  <form action="">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Nombre</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Apellido</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Usuario</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="password" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Contraseña</label>
                    </div>

                  </form>

                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-12 padding-0">
              <div class="panel box-v2">
                  <div class="panel-heading padding-0">
                    <img src="asset/img/bg2.jpg" class="box-v2-cover img-responsive"/>
                    <div class="box-v2-detail">
                      <img src="asset/img/avatar.jpg" class="img-responsive"/>
                      <h4>Akihiko Avaron</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-12 padding-0 text-center">
                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                          <h3>2.000</h3>
                          <p>Post</p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                          <h3>2.232</h3>
                          <p>share</p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 padding-0">
                          <h3>4.320</h3>
                          <p>photos</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-12 padding-0">
              <div class="panel box-v3">
                <div class="panel-heading bg-white border-none">
                  <h4>Report</h4>
                </div>
                <div class="panel-body">
                    
                  <div class="media">
                    <div class="media-left">
                        <span class="icon-folder icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Document Handling</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">UI/UX Development</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-energy icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Server Optimation</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-user icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">User Status</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>

                    <div class="media">
                    <div class="media-left">
                        <span class="icon-fire icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Firewall Status</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer bg-white border-none">
                    <center>
                      <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none"/>
                    </center>
                </div>
              </div>
            </div>

            <div class="col-md-12 padding-0">
              <div class="panel bg-light-blue">
                <div class="panel-body text-white">
                    <p class="animated fadeInUp quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Ut wisi..."</p>
                    <div class="col-md-12 padding-0">
                      <div class="text-left col-md-7 col-xs-12 col-sm-7 padding-0">
                        <span class="fa fa-twitter fa-2x"></span>
                        <span>22 May, 2015 via mobile</span>
                      </div>
                      <div style="padding-top:8px;" class="text-right col-md-5 col-xs-12 col-sm-5 padding-0">
                        <span class="fa fa-retweet"></span> 2000
                        <span class="fa fa-star"></span> 3000
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="col-md-12 card-wrap padding-0">
        <div class="col-md-6">
            <div class="panel">
              <div class="panel-heading bg-white border-none" style="padding:20px;">
                <div class="col-md-6 col-sm-6 col-sm-12 text-left">
                  <h4>Line Chart</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-sm-12">
                    <div class="mini-onoffswitch pull-right onoffswitch-danger" style="margin-top:10px;">
                      <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                      <label class="onoffswitch-label" for="myonoffswitch1"></label>
                    </div>
                </div>
              </div>
              <div class="panel-body" style="padding-bottom:50px;">
                  <div id="canvas-holder1">
                        <canvas class="line-chart" style="margin-top:30px;height:200px;"></canvas>
                  </div>
                  <div class="col-md-12" style="padding-top:20px;">
                      <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                          <h2 style="line-height:.4;">$100.21</h2>
                          <small>Total Laba</small>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                          <h2 style="line-height:.4;">2000</h2>
                          <small>Total Barang</small>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                          <h2 style="line-height:.4;">$291.1</h2>
                          <small>Total Pengeluaran</small>
                      </div>
                  </div>
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
              <div class="panel-heading bg-white border-none" style="padding:20px;">
                <div class="col-md-6 col-sm-6 col-sm-12 text-left">
                  <h4>Orders</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-sm-12">
                    <div class="mini-onoffswitch pull-right onoffswitch-primary" style="margin-top:10px;">
                      <input type="checkbox" name="onoffswitch3" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                      <label class="onoffswitch-label" for="myonoffswitch3"></label>
                    </div>
                </div>
              </div>
              <div class="panel-body" style="padding-bottom:50px;">
                  <div id="canvas-holder1">
                    <canvas class="bar-chart"></canvas>
                  </div>
                  <div class="col-md-12 padding-0" >
                    <div class="col-md-4 col-sm-4 hidden-xs" style="padding-top:20px;">
                      <canvas class="doughnut-chart2"></canvas>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h4>Progress Produksi barang</h4>
                        <p>Sed hendrerit. Curabitur blandit mollis lacus. Duis leo. Sed libero.fusce commodo aliquam arcu..</p>
                        <div class="progress progress-mini">
                          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="panel bg-green text-white">
                <div class="panel-body">
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="maps" style="height:300px;">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <canvas class="doughnut-chart hidden-xs"></canvas>
                      <div class="col-md-12">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <h1>72.993</h1>
                          <p>People</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h1>12.000</h1>
                            <p>Active</p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- end: content -->

</div>
@endsection




@section('scripts')

<script type="text/javascript">
  (function(jQuery){

    // start: Chart =============

    Chart.defaults.global.pointHitDetectionRadius = 1;
    Chart.defaults.global.customTooltips = function(tooltip) {

        var tooltipEl = $('#chartjs-tooltip');

        if (!tooltip) {
            tooltipEl.css({
                opacity: 0
            });
            return;
        }

        tooltipEl.removeClass('above below');
        tooltipEl.addClass(tooltip.yAlign);

        var innerHtml = '';
        if (undefined !== tooltip.labels && tooltip.labels.length) {
            for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                innerHtml += [
                    '<div class="chartjs-tooltip-section">',
                    '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                    '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                    '</div>'
                ].join('');
            }
            tooltipEl.html(innerHtml);
        }

        tooltipEl.css({
            opacity: 1,
            left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
            top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
            fontFamily: tooltip.fontFamily,
            fontSize: tooltip.fontSize,
            fontStyle: tooltip.fontStyle
        });
    };
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var lineChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            fillColor: "rgba(21,186,103,0.4)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(66,69,67,0.3)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
             data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }, {
            label: "My Second dataset",
            fillColor: "rgba(21,113,186,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }]
    };

    var doughnutData = [
            {
                value: 300,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 50,
                color: "#1AD576",
                highlight: "#15BA67",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#0F5E36",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];


    var doughnutData2 = [
            {
                value: 100,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 250,
                color: "#FF6656",
                highlight: "#FF6656",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#FD786A",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];

    var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.4)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(21,186,103,0.2)",
                    highlightStroke: "rgba(21,186,103,0.2)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(21,113,186,0.2)",
                    highlightStroke: "rgba(21,113,186,0.2)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

     window.onload = function(){
            var ctx = $(".doughnut-chart")[0].getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                responsive : true,
                showTooltips: true
            });

            var ctx2 = $(".line-chart")[0].getContext("2d");
            window.myLine = new Chart(ctx2).Line(lineChartData, {
                 responsive: true,
                    showTooltips: true,
                    multiTooltipTemplate: "<%= value %>",
                 maintainAspectRatio: false
            });

            var ctx3 = $(".bar-chart")[0].getContext("2d");
            window.myLine = new Chart(ctx3).Bar(barChartData, {
                 responsive: true,
                    showTooltips: true
            });

            var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
            window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                responsive : true,
                showTooltips: true
            });

        };
    
    //  end:  Chart =============

    // start: Calendar =========
     $('.dashboard .calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2015-02-12',
        businessHours: true, // display business hours
        editable: true,
        events: [
            {
                title: 'Business Lunch',
                start: '2015-02-03T13:00:00',
                constraint: 'businessHours'
            },
            {
                title: 'Meeting',
                start: '2015-02-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
                color: '#20C572'
            },
            {
                title: 'Conference',
                start: '2015-02-18',
                end: '2015-02-20'
            },
            {
                title: 'Party',
                start: '2015-02-29T20:00:00'
            },

            // areas where "Meeting" must be dropped
            {
                id: 'availableForMeeting',
                start: '2015-02-11T10:00:00',
                end: '2015-02-11T16:00:00',
                rendering: 'background'
            },
            {
                id: 'availableForMeeting',
                start: '2015-02-13T10:00:00',
                end: '2015-02-13T16:00:00',
                rendering: 'background'
            },

            // red areas where no events can be dropped
            {
                start: '2015-02-24',
                end: '2015-02-28',
                overlap: false,
                rendering: 'background',
                color: '#FF6656'
            },
            {
                start: '2015-02-06',
                end: '2015-02-08',
                overlap: true,
                rendering: 'background',
                color: '#FF6656'
            }
        ]
    });
    // end : Calendar==========

    // start: Maps============

      jQuery('.maps').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#fff',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#C8EEFF', '#006491'],
        normalizeFunction: 'polynomial'
    });

    // end: Maps==============

  })(jQuery);
  </script>


@endsection

@section('scriptAngular')
    
@endsection