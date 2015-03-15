@extends('admin.layouts.default')
<?
$title = 'Admin Dashboard';
$menu = 'dashboard';
?>
@section('content')

<h2 class="margin-none">Dashboard &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="row">
    <div class="col-md-8">

        <!-- //Row -->
        <!-- Widget -->

        <!-- //Widget -->

        <!-- //Row -->
        <!-- Widget	 -->
        <div class="widget">
            <div class="widget-head innerAll half">
                <h4 class="margin-none"><i class="fa fa-fw icon-star"></i> Page Views</h4>
            </div>
            <!-- Widget -->
            <div class="widget-body innerAll inner-2x">
                <table class="table table-striped margin-none">
                    <thead>
                    <tr>
                        <th>Box office</th>
                        <th class="text-center">Cash</th>
                        <th class="text-right" style="width: 100px;">Trend</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <strong>1.</strong>Frozen
                        </td>
                        <td class="text-center">€8,718,939</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[234,411,256,364,210,149,471,484,271,107]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>2.</strong>The Hobbit 2
                        </td>
                        <td class="text-center">€7,800,000</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[348,417,191,457,422,127,469,103,458,197]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>3.</strong>The Wolf of Wall Street
                        </td>
                        <td class="text-center">€5,671,036</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[339,237,103,112,287,398,295,493,368,209]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>4.</strong>Iron Man 3
                        </td>
                        <td class="text-center">€409,013,994</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[108,415,103,280,158,393,211,172,208,431]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>5.</strong>Catching Fire
                        </td>
                        <td class="text-center">€398,327,026</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[371,389,208,141,179,156,243,211,153,200]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>6.</strong>Despicable Me 2
                        </td>
                        <td class="text-center">€367,835,345</td>
                        <td class="text-right">
                            <div class="sparkline" style="width: 100px;" sparkheight="20" sparktype="line" sparkwidth="100%" sparklinewidth="2" sparklinecolor="#3695d5" sparkfillcolor="" data-data="[200,365,202,215,186,114,296,138,293,304]"><canvas height="20" width="100" style="display: inline-block; width: 100px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- // End Widget Body -->
        </div>
        <!-- // End Widget -->
        <!-- Widget	 -->
        <div class="widget widget-body-white overflow-hidden">
            <div class="widget-head innerAll half">
                <h4 class="margin-none"><i class="fa fa-fw icon-wallet"></i> Popular Pages</h4>
            </div>
            <div class="widget-body innerAll">
                <!-- Horizontal Bars Chart -->
                <div style="padding: 0px; position: relative;" id="chart_horizontal_bars" class="flotchart-holder">
                    <canvas height="200" width="615" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 615px; height: 200px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 16px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 115px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 210px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 309px; text-align: center;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 409px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 110px; top: 169px; left: 508px; text-align: center;">25</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 0px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 124px; left: 0px; text-align: right;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 99px; left: 0px; text-align: right;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 0px; text-align: right;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 50px; left: 0px; text-align: right;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 25px; left: 0px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">6</div></div></div>

                    <canvas height="200" width="615" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 615px; height: 200px;" class="flot-overlay"></canvas>
                </div>
            </div>
        </div>
        <!-- //Widget -->
    </div>
    <!-- //  End Col -->
    <div class="col-md-4">
        <!-- Widget -->
        <div class="widget widget-body-gray">
            <div class="widget-body padding-none">
                <div class="bg-primary innerAll">
                    <div class="text-large text-white pull-right">€1000</div>
                    <h4 class="text-white strong text-medium">Earnings</h4>
                    <h5 class="text-white margin-none">Today's earnings</h5>

                    <div class="separator bottom"></div>
                    <div class="progress primary progress-mini  margin-none">
                        <div class="progress-bar progress-bar-white	" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //End Widget -->
        <!-- Widget -->
        <div class="widget widget-body-gray">
            <div class="innerAll half border-bottom">
                <div class="btn-group btn-group-sm pull-right">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Monthly
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="">Monthly</a>
                        </li>
                        <li><a href="">Quarterly</a>
                        </li>
                        <li><a href="">Yearly</a>
                        </li>
                    </ul>
                </div>
                <h4 class="innerT half margin-none pull-left">Monthly Spend</h4>

                <div class="clearfix"></div>
            </div>
            <div class="widget-body">
                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quod, ipsam, minus nam consequatur aliquid
                    sint.
                </p>
            </div>
            <div class="innerAll ">
                <p class="text-large">€3,204.89</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% from last month</span>
                    </div>
                </div>
                <div class="text-right">
                    <p class="strong margin-none">€5,127.82</p>

                    <p>
                        <em>Previus month bill</em>
                    </p>
                </div>
            </div>
        </div>
        <!-- //End Widget -->
        <!-- Widget -->
        <div class="widget widget-body-gray">
            <div class=" innerAll half border-bottom">
                <h4 class="pull-left innerT half margin-none"><i class="fa fa-fw fa-money"></i> Earnings</h4>
                <div class="clearfix"></div>
            </div>
            <div class="innerAll border-bottom">
                <p class="margin-none">
                    <span class="strong">Today:</span>€502.42 <i class="fa text-primary fa-fw fa-arrow-up"></i>
                    <span class="strong text-primary">4%</span>
                </p>
            </div>
            <div class="widget-body ">
                <div class="sparkline" sparktype="line" sparkresize="true" sparkheight="76" sparklinewidth="2" sparkwidth="100%" sparklinecolor="#3695d5" sparkspotcolor="#3695d5" sparkfillcolor="" sparkhighlightlinecolor="#7c7c7c" sparkhighlightspotcolor="#7c7c7c" sparkspotradius="4" sparkminspotcolor="#b55151" sparkmaxspotcolor="#609450"><canvas height="76" width="280" style="display: inline-block; width: 280px; height: 76px; vertical-align: top;"></canvas></div>
            </div>
        </div>
        <!-- //End Widget -->
    </div>
    <!-- //End Col -->
</div>
@stop