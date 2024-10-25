@extends('layout')
@section('content')
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row match-height">
                <!-- Greetings Card starts -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-congratulations">
                        <div class="card-body text-center">
                            <img src="{{asset("app-assets/")}}/images/elements/decore-left.png"
                                 class="congratulations-img-left" alt="card-img-left">
                            <img src="{{asset("app-assets/")}}/images/elements/decore-right.png"
                                 class="congratulations-img-right" alt="card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-award font-large-1">
                                        <circle cx="12" cy="8" r="7"></circle>
                                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">Mail İmza'ya Hoşgeldin {{session("adsoyad")}},</h1>
                                <p class="card-text m-auto w-75">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->
                <div class="col-lg-8 col-12">
                    <div class="card card-company-table" style="height: 100%;">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Firma Ad</th>
                                        <th>Personel Ad</th>
                                        <th>Personel E-Posta</th>
                                        <th>Personel Unvan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list["personeller"] as $personel)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span>{{$personel->firma_ad}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span>{{$personel->personel_adsoyad}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span>{{$personel->personel_eposta}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span>{{$personel->personel_unvan}}</span>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h4 class="card-title mb-75">Firma - Personel Oranı</h4>
                        </div>
                        <div class="card-body">
                            <div id="donut-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Dashboard Analytics end -->

    </div>

    <script>

        $(function () {
            'use strict';

            var flatPicker = $('.flat-picker'),
                isRtl = $('html').attr('data-textdirection') === 'rtl',
                chartColors = {
                    column: {
                        series1: '#826af9',
                        series2: '#d2b0ff',
                        bg: '#f8d3ff'
                    },
                    success: {
                        shade_100: '#7eefc7',
                        shade_200: '#06774f'
                    },
                    donut: {
                        series1: '#ffe700',
                        series2: '#00d4bd',
                        series3: '#826bf8',
                        series4: '#2b9bf4',
                        series5: '#FFA1A1'
                    },
                    area: {
                        series3: '#a4f8cd',
                        series2: '#60f2ca',
                        series1: '#2bdac7'
                    }
                };

            // Donut Chart
            // --------------------------------------------------------------------
            var donutChartEl = document.querySelector('#donut-chart'),
                donutChartConfig = {
                    chart: {
                        height: 350,
                        type: 'donut'
                    },
                    legend: {
                        show: true,
                        position: 'bottom'
                    },
                    @php($array = [])
                    labels:[
                    @foreach($list["firmalar"] as $liste)
                        @php(array_push($array,personel_count_dondur($liste->id)))
                        '{{$liste->firma_ad}}',
                        @endforeach
]
                    ,
                    series: <?php echo json_encode($array) ?>,
                    colors: [
                        chartColors.donut.series1,
                        chartColors.donut.series5,
                        chartColors.donut.series3,
                        chartColors.donut.series2,
                        'red',

                    ],
                    dataLabels: {
                        enabled: true,
                        formatter: function (val, opt) {
                            return parseInt(val) + '%';
                        }
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                labels: {
                                    show: true,
                                    name: {
                                        fontSize: '2rem',
                                        fontFamily: 'Montserrat'
                                    },
                                    value: {
                                        fontSize: '1rem',
                                        fontFamily: 'Montserrat',
                                        formatter: function (val) {
                                            return parseInt(val) + '%';
                                        }
                                    },
                                    total: {
                                        show: true,
                                        fontSize: '1.5rem',
                                        label: 'Operational',
                                        formatter: function (w) {
                                            return '31%';
                                        }
                                    }
                                }
                            }
                        }
                    },
                    responsive: [
                        {
                            breakpoint: 992,
                            options: {
                                chart: {
                                    height: 380
                                }
                            }
                        },
                        {
                            breakpoint: 576,
                            options: {
                                chart: {
                                    height: 320
                                },
                                plotOptions: {
                                    pie: {
                                        donut: {
                                            labels: {
                                                show: true,
                                                name: {
                                                    fontSize: '1.5rem'
                                                },
                                                value: {
                                                    fontSize: '1rem'
                                                },
                                                total: {
                                                    fontSize: '1.5rem'
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    ]
                };
            if (typeof donutChartEl !== undefined && donutChartEl !== null) {
                var donutChart = new ApexCharts(donutChartEl, donutChartConfig);
                donutChart.render();
            }
        });

    </script>
@endsection
