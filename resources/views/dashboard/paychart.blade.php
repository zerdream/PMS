@extends('layoutchart')
@section('content')
    <div id="content">
        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">Charts</li>
                </ol>

            </div>
            <div class="section-body contain-lg">

                <!-- BEGIN FLOT -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-primary">Flot charts</h2>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <h4>Examples</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                Attractive JavaScript plotting for jQuery.
                                Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="visitor-chart" class="flot height-6" data-title="Site visits" data-color="#9C27B0,#0aa89e"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Interactive linechart</em>
                        <div class="card">
                            <div class="card-body">
                                <div id="realtime-chart" class="flot height-6" data-title="Site visits" data-color="#2196F3"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Realtime chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END FLOT -->

                <hr class="ruler-xxl"/>

                <!-- BEGIN RICKSHAW -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-primary">Rickshaw charts</h2>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <h4>Examples</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                Rickshaw is a JavaScript toolkit for creating interactive time series graphs.
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption"> Interactive Real-Time Data (Dig into continuously updating data)</em>
                        <div class="card">
                            <div class="card-body">
                                <div class="column">
                                    <div id="rickshawDemo2"></div>
                                    <div id="slider"></div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption"> Multiple Renderers (Bars, lines, area, and scatterplot graphs all in one setting)</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END RICKSHAW -->

                <hr class="ruler-xxl"/>

                <!-- BEGIN KNOB -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-primary">Knob charts</h2>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <h4>Examples</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                Knob charts are a downward compatible, touchable, jQuery dial.
                                Material Admin has added serveral classes for easy styling with theme colors.
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="knob knob-primary knob-default-dark-track size-4"><input type="text" class="dial" data-min="0" data-max="100" data-thickness=.1 value="40" data-readOnly=true></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Thin knob chart</em>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="knob knob-accent knob-default-track size-4"><input type="text" class="dial" data-min="0" data-max="100" data-thickness=.1 value="40" data-readOnly=true></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Thin knob chart with alternative colors</em>
                    </div><!--end .col -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="knob knob-accent knob-default-track size-4"><input type="text" class="dial" data-min="0" data-max="365" data-cursor=true value="90"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Interactive knob chart</em>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="knob knob-primary knob-default-light-track size-4"><input type="text" class="dial" value="56" data-angleOffset=-125 data-angleArc=250 data-readOnly=true></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Gauge style knob chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END KNOB -->

                <hr class="ruler-xxl"/>

                <!-- BEGIN SPARKLINE -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-primary">Sparkline charts</h2>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <h4>Examples</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    Lorem ipsum dolor <span class="inlinesparkline" data-type="pie">1,1,2</span>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <span class="inlinesparkline" data-type="discrete">4,6,7,7,4,3,2,1,4,4</span>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <span class="inlinesparkline">1,4,4,7,5,9,10</span> cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa <span class="inlinesparkline" data-type="bar">1,4,4,7,5,9,10</span> qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Curabitur <span class="inlinesparkline" data-type="box">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span> tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis <span class="inlinesparkline" data-type="bullet">10,12,12,9,7</span> ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. <span class="inlinesparkline" data-type="tristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span> Etiam tempor.
                                </p>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Sparkline work perfectly in large parts of text</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                With Sparklines you can also create larger charts as you can see below.
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-offset-1 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="sparkline3" data-line-color="#9C27B0"></span>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Large sparkline</em>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="sparkline4" data-line-color="#20252b" data-fill-color="#9C27B0"></span>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Large sparkline</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END SPARKLINE -->

                <hr class="ruler-xxl"/>

                <!-- BEGIN MORRIS - AREA CHART -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-primary">Morris charts</h2>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <h4>Area chart</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                Create an area chart using <code>Morris.Area(options)</code>.
                                Area charts take all the same options as line charts, and the following extras: <code>behaveLikeLine</code>
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="morris-area-graph" class="height-5" data-colors="#9C27B0,#0aa89e"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Area chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END MORRIS - AREA CHART -->

                <!-- BEGIN MORRIS - GROUPED BAR CHART -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Bar charts</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>
                                Create bar charts using <code>Morris.Bar(options)</code>.
                            </p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="morris-bar-graph" class="height-7" data-colors="#9C27B0,#2196F3,#0aa89e"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Grouped bar chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END MORRIS - GROUPED BAR CHART -->

                <!-- BEGIN MORRIS - STACKED BAR CHART -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Stacked bar charts</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>Create a stacked bar chart by using <code>stacked:true</code></p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="morris-stacked-bar-graph" class="height-7" data-colors="#9C27B0,#2196F3,#0aa89e"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Stacked bar chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END MORRIS - STACKED BAR CHART -->

                <!-- BEGIN MORRIS - STACKED BAR CHART -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Donut chart</h4>
                    </div><!--end .col -->
                    <div class="col-lg-3 col-md-4">
                        <article class="margin-bottom-xxl">
                            <p>This really couldn't be easier. Create a Donut chart using <code>Morris.Donut(options)</code></p>
                        </article>
                    </div><!--end .col -->
                    <div class="col-lg-offset-1 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="morris-donut-graph" class="height-6" data-colors="#9C27B0,#2196F3,#0aa89e,#FF9800"></div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Donut chart</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END MORRIS - STACKED BAR CHART -->

            </div><!--end .section-body -->
        </section>
        <!-- BEGIN MORRIS - LINE CHART -->
        <section class="style-default-dark">
            <div class="section-body">
                <h2 class="text-primary">Morris Line chart</h2>
                <p>
                    The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>, where options is an object containing some of the following configuration options.
                </p>
                <div id="morris-line-graph" class="height-8" data-colors="#9C27B0"></div>
            </div><!--end .section-body -->
        </section>
    </div>
@endsection