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
          style="width: 70%; height:70%; margin:5%;">
        </li>
        <li>
          <h3 class="animated fadeInLeft" align="center">Nombre del usuario</h3>
        </li>
        <li class="time" align="right">
          <h1 class="animated fadeInLeft" style="margin-right:2%; font-size:25px;">21:00</h1>
          <p class="animated fadeInRight" style="margin-right:1%;">Sat,October 1st 2029</p>
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

    <div class="col-md-12" style="padding:20px;">
      <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
          
          {{-- Aquí --}}
          <div class="col-md-12">
            <div class="panel box-v4">
              <div class="panel-heading bg-white border-none">
                <h3 align="center"><span class="icon-notebook icons"></span> Registro de nuevo usuario </h3>
              </div>
              <div class="panel-body padding-0">
                <div class="col-md-6 col-xs-6 col-md-6 col-lg-6box-v4-alert">
                  <h3>Datos personales</h3>
                  <form action="">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Nombre(s)</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Apellido paterno</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text" name="#" required>
                      <span class="bar"></span>
                      <label>Apellido materno</label>
                    </div>

                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text Animated" required>
                      <span class="bar"></span>
                      <label><span class="fa fa-calendar"></span> Fecha de nacimiento
                    </div>

                  </form>

                </div>

                <div class="col-md-6 col-xs-6 col-md-6 col-lg-6box-v4-alert">
                  <h3>Datos de usuario</h3>
                    <form action="">
  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="#" required>
                        <span class="bar"></span>
                        <label>Nombre de usuario</label>
                      </div>
  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" name="#" required>
                        <span class="bar"></span>
                        <label>Contraseña</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" name="#" required>
                        <span class="bar"></span>
                        <label>Confirmar contraseña</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select class="select2-A">
                          <optgroup label="Usuarios disponibles">
                            <option value="">Gerente</option>
                            <option value="">Trabajador</option>
                            <option value="">Cliente</option>
                          </optgroup>
                        </select>
                      </div>

                      
  
                    </form>
  
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
<script>
$(".select2-A").select2({
  placeholder: "Tipo de usuario",
  allowClear: true
});
</script>

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