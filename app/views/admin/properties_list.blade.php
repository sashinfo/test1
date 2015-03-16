@extends('admin.layouts.default')
@section('title','Properties List')
<?
$title = 'Properties List';
$menu = 'properties';
?>
@section('content')
<h2 class="margin-none pull-left">Properties</h2>
<div class="btn-group btn-group-sm pull-right">
    <a href="{{ url('/admin/properties/add_property') }}" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add Property</a>
</div>
<div class="clearfix"></div>
<div class="row">
    <!-- Column -->
    <div class="col-md-4">
        <!-- Widget -->
        <div class="widget margin-none">
            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Last order</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->
            <div class="widget-body">
                <ul class="unstyled">
                    <li>
                        <div class="media">
                            <a class="pull-left">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAkklEQVRoge3SQQqAIBQA0c7mcb1k7VpI4tfSBpnFQAkffOqRUjp36Ph7A0KEwBNCSwgtIbSE0BJCSwgtIbSE0BqG5JzvyrWZs1Mgtf/Wht7MfgqpnWj5XVuLzC67kcimW0+mNSukd/MjkJ7ZJTfydNLRtx+ZXf60KAmhJYSWEFpCaAmhJYSWEFpCaAmhJYTWNpALSjaW1P6nIyoAAAAASUVORK5CYII=" style="width: 50px; height: 50px;" data-src="holder.js/50x50/dark" class="media-object img-responsive" alt="50x50">
                            </a>
                            <div class="media-body">
                                <p class="margin-none text-uppercase">10 items</p>
                                <p>
                                    <strong>€5,900</strong>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->
    </div>
    <!-- // Column END -->
    <!-- Column -->
    <div class="col-md-4">
        <!-- Widget -->
        <div class="widget margin-none">
            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Best seller</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->
            <div class="widget-body">
                <ul class="unstyled">
                    <li>
                        <div class="media">
                            <a class="pull-left">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAkklEQVRoge3SQQqAIBQA0c7mcb1k7VpI4tfSBpnFQAkffOqRUjp36Ph7A0KEwBNCSwgtIbSE0BJCSwgtIbSE0BqG5JzvyrWZs1Mgtf/Wht7MfgqpnWj5XVuLzC67kcimW0+mNSukd/MjkJ7ZJTfydNLRtx+ZXf60KAmhJYSWEFpCaAmhJYSWEFpCaAmhJYTWNpALSjaW1P6nIyoAAAAASUVORK5CYII=" style="width: 50px; height: 50px;" data-src="holder.js/50x50/dark" class="media-object img-responsive" alt="50x50">
                            </a>
                            <div class="media-body">
                                <p class="margin-none">Product name</p>
                                <p>
                                    <strong>€2,900</strong>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->
    </div>
    <!-- // Column END -->
    <!-- Column -->
    <div class="col-md-4">
        <!-- Widget -->
        <div class="widget margin-none">
            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Promotion</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->
            <div class="widget-body">
                <ul class="unstyled">
                    <li>
                        <div class="media">
                            <a class="pull-left">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAkklEQVRoge3SQQqAIBQA0c7mcb1k7VpI4tfSBpnFQAkffOqRUjp36Ph7A0KEwBNCSwgtIbSE0BJCSwgtIbSE0BqG5JzvyrWZs1Mgtf/Wht7MfgqpnWj5XVuLzC67kcimW0+mNSukd/MjkJ7ZJTfydNLRtx+ZXf60KAmhJYSWEFpCaAmhJYSWEFpCaAmhJYTWNpALSjaW1P6nIyoAAAAASUVORK5CYII=" style="width: 50px; height: 50px;" data-src="holder.js/50x50/dark" class="media-object img-responsive" alt="50x50">
                            </a>
                            <div class="media-body">
                                <p class="margin-none">Product name</p>
                                <p>
                                    <strong>€1,800</strong>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->
    </div>
    <!-- // Column END -->
</div>
<div class="separator-h"></div>
<!-- Widget -->
<div class="widget widget-body-white">
<!-- Widget heading -->
<div class="widget-head">
    <h4 class="heading glyphicons list"><i></i> Manage products</h4>
</div>
<!-- // Widget heading END -->
<div class="widget-body padding-none">
<div class="innerLR innerT">
    <!-- Total products & Sort by options -->
    <div class="form-inline">
                                <span class="pull-right">
                                    <label class="strong innerLR">Sort by:</label>
                                    <select style="display: none;" class="selectpicker margin-none" data-style="btn-default btn-sm">
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select><div class="btn-group bootstrap-select margin-none"><button title="Option" type="button" class="btn dropdown-toggle selectpicker btn-default btn-sm" data-toggle="dropdown"><span class="filter-option pull-left">Option</span>&nbsp;<span class="caret"></span></button><div style="max-height: 532.067px; overflow: hidden; min-height: 0px;" class="dropdown-menu open"><ul style="max-height: 530.067px; overflow-y: auto;" class="dropdown-menu inner selectpicker" role="menu"><li class="selected" rel="0"><a tabindex="0" class="" style=""><span class="text">Option</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">Option</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">Option</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
                                </span>
        <div class="innerAll half strong pull-left">
            Total products: 26
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- // Total products & Sort by options END -->
    <div class="separator bottom"></div>
    <!-- Filters -->
    <div class="filter-bar">
        <form class="margin-none form-inline">
            <!-- From -->
            <div class="form-group col-md-2 padding-none">
                <label>From:</label>
                <div class="input-group">
                    <input name="from" id="dateRangeFrom" class="form-control" value="08/05/13" type="text">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                            </span>
                </div>
            </div>
            <!-- // From END -->
            <!-- To -->
            <div class="form-group col-md-2 padding-none">
                <label>To:</label>
                <div class="input-group">
                    <input name="to" id="dateRangeTo" class="form-control" value="08/18/13" type="text">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                            </span>
                </div>
            </div>
            <!-- // To END -->
            <!-- Min -->
            <div class="form-group col-md-2 padding-none">
                <label>Min:</label>
                <div class="input-group">
                    <input name="from" class="form-control" value="100" type="text">
                                            <span class="input-group-addon"><i class="fa fa-euro"></i>
                                            </span>
                </div>
            </div>
            <!-- // Min END -->
            <!-- Max -->
            <div class="form-group col-md-2 padding-none">
                <label>Max:</label>
                <div class="input-group">
                    <input name="from" class="form-control" value="500" type="text">
                                            <span class="input-group-addon"><i class="fa fa-euro"></i>
                                            </span>
                </div>
            </div>
            <!-- // Max END -->
            <!-- Select -->
            <div class="form-group col-md-3 padding-none">
                <label class="label-control">Select:</label>
                <div class="col-md-8 padding-none">
                    <select name="from" class="form-control">
                        <option>Some option</option>
                        <option>Other option</option>
                        <option>Some other option</option>
                    </select>
                </div>
            </div>
            <!-- // Select END -->
            <div class="clearfix"></div>
        </form>
    </div>
    <!-- // Filters END -->
</div>
<!-- Products table -->
<table class="table table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable ui-sortable">
<thead>
<tr>
    <th style="width: 1%;" class="uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </th>
    <th style="width: 1%;" class="center">No.</th>
    <th>Title</th>
    <th style="width: 1%;" class="center">Drag</th>
    <th class="center">Preview</th>
    <th class="center">Stock</th>
    <th class="center">Price</th>
    <th class="center" style="width: 100px;">Actions</th>
</tr>
</thead>
<tbody>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">1</td>
    <td class="important">Lorem Amet Dolor</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>3 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="3" type="text">
    </td>
    <td class="center">€46</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable selected">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span class="checked"><input style="opacity: 0;" checked="checked" type="checkbox"></span></div>
    </td>
    <td class="center">2</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="6" type="text">
    </td>
    <td class="center">€24</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable selected">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span class="checked"><input style="opacity: 0;" checked="checked" type="checkbox"></span></div>
    </td>
    <td class="center">3</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="9" type="text">
    </td>
    <td class="center">€45</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">4</td>
    <td class="important">Lorem Ipsum Sit</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>3 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="4" type="text">
    </td>
    <td class="center">€28</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">5</td>
    <td class="important">Lorem Ipsum Sit</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>1 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="2" type="text">
    </td>
    <td class="center">€50</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">6</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="4" type="text">
    </td>
    <td class="center">€31</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">7</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="5" type="text">
    </td>
    <td class="center">€15</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">8</td>
    <td class="important">Lorem Amet Dolor</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="7" type="text">
    </td>
    <td class="center">€30</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">9</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>1 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="5" type="text">
    </td>
    <td class="center">€41</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
<tr class="selectable">
    <td class="center uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </td>
    <td class="center">10</td>
    <td class="important">Lorem Dolor Ipsum</td>
    <td class="center js-sortable-handle">
        <span class="fa fa-arrows move"></span>
    </td>
    <td class="center">
        <span class="fa fa-fw fa-picture-o"></span>2 photos</td>
    <td class="text-center">
        <input class="form-control" style="width: 50px; margin: 0 auto;" value="9" type="text">
    </td>
    <td class="center">€20</td>
    <td class="center">
        <a href="product_edit.html?lang=en" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>
</tbody>
</table>
<!-- // Products table END -->
<!-- Options -->
<div class="">
    <!-- With selected actions -->
    <div class="pull-left checkboxs_actions" style="">
        <label>With selected:
            <select style="display: none;" class="selectpicker margin-none dropup" data-style="btn-default btn-xs">
                <option>Action</option>
                <option>Action</option>
                <option>Action</option>
            </select><div class="btn-group bootstrap-select margin-none dropup"><button title="Action" type="button" class="btn dropdown-toggle selectpicker btn-default btn-xs" data-toggle="dropdown"><span class="filter-option pull-left">Action</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li class="selected" rel="0"><a tabindex="0" class="" style=""><span class="text">Action</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">Action</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">Action</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
        </label>
    </div>
    <!-- // With selected actions END -->
    <div class="pull-right">
        <ul class="pagination margin-none">
            <li class="disabled"><a href="#">«</a>
            </li>
            <li class="active"><a href="#">1</a>
            </li>
            <li><a href="#">2</a>
            </li>
            <li><a href="#">3</a>
            </li>
            <li><a href="#">»</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <!-- // Pagination END -->
</div>
<!-- // Options END -->
</div>
</div>
<!-- // Widget END -->

@stop