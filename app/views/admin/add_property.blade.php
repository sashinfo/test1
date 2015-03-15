@extends('admin.layouts.default')
<?
$title = 'Add Property';
$menu = 'properties';
?>
@section('content')

<h2 class="margin-none pull-left">Add Property</h2>
<div class="btn-group btn-group-sm pull-right">
    <a href="{{ url('/admin/properties') }}" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> Back to Catalog</a>
</div>
<div class="clearfix"></div>
<!-- Widget -->
<div class="widget widget-tabs border-none">
    <!-- Widget heading -->
    <div class="widget-head">
        <ul>
            <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a>
            </li>
            <li class=""><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Photos</a>
            </li>
            <li class=""><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Custom Attributes</a>
            </li>
            <li class=""><a href="#productPriceTab" data-toggle="tab" class="glyphicons table"><i></i>Qty &amp; Price</a>
            </li>
            <li class=""><a href="#productSeoTab" data-toggle="tab" class="glyphicons podium"><i></i>SEO</a>
            </li>
        </ul>
    </div>
    <!-- // Widget heading END -->
    <div class="widget-body">
        <div class="tab-content">
            <!-- Description -->
            <div class="tab-pane animated fadeInUp active" id="productDescriptionTab">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-3">
                        <strong>Product title</strong>
                        <p class="muted">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                    </div>
                    <!-- // Column END -->
                    <!-- Column -->
                    <div class="col-md-9">
                        <label for="inputTitle">Title</label>
                        <input id="inputTitle" class="form-control" value="" placeholder="Enter product title ..." type="text">
                        <div class="separator"></div>
                    </div>
                    <!-- // Column END -->
                </div>
                <!-- // Row END -->
                <hr class="separator bottom">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-3">
                        <strong>Description</strong>
                        <p class="muted">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                    </div>
                    <!-- // Column END -->
                    <!-- Column -->
                    <div class="col-md-9">
                        <label for="textDescription">Description</label>
                        <ul style="" class="wysihtml5-toolbar" id="textDescription-wysihtml5-toolbar"><li class="dropdown"><a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-font icon-white"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div">Normal text</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">Heading 1</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">Heading 2</a></li></ul></li><li><div class="btn-group"><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="bold" title="CTRL+B">Bold</a><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="italic" title="CTRL+I">Italic</a></div></li><li><div class="btn-group"><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="insertUnorderedList" title="Unordered List"><i class="fa fa-list icon-white"></i></a><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="insertOrderedList" title="Ordered List"><i class="fa fa-th-list icon-white"></i></a><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="Outdent" title="Outdent"><i class="fa fa-indent icon-white"></i></a><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="Indent" title="Indent"><i class="fa fa-outdent icon-white"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal hide fade"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Insert Link</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-link-url input-xlarge"></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a></div></div><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="createLink" title="Link"><i class="fa fa-share-square-o icon-white"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal hide fade"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Insert Image</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-image-url input-xlarge"></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a></div></div><a unselectable="on" href="javascript:;" class="btn btn-primary" data-wysihtml5-command="insertImage" title="Insert image"><i class="fa fa-picture-o icon-white"></i></a></li></ul><textarea style="display: none;" id="textDescription" class="wysihtml5 form-control" rows="5">Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Aenean commodo ligula
                            eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus. Donec
                            quam felis, ultricies nec, pellentesque
                            eu, pretium quis, sem. Nulla consequat
                            massa quis enim. Donec pede justo,
                            fringilla vel, aliquet nec, vulputate
                            eget, arcu. In enim justo, rhoncus
                            ut, imperdiet a, venenatis vitae, justo.
                            Nullam dictum felis eu pede mollis
                            pretium.
                        </textarea><input value="1" name="_wysihtml5_mode" type="hidden"><iframe style="background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(239, 239, 239); border-style: solid; border-width: 1px; clear: none; display: block; float: none; margin: 0px; outline: 0px none rgb(85, 85, 85); outline-offset: 0px; padding: 6px 12px; position: static; z-index: auto; vertical-align: text-bottom; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 4px; width: 707.25px; height: 114px; top: auto; left: auto; right: auto; bottom: auto;" marginheight="0" marginwidth="0" allowtransparency="true" security="restricted" class="wysihtml5-sandbox" frameborder="0" height="0" width="0"></iframe>
                    </div>
                    <!-- // Column END -->
                </div>
                <!-- // Row END -->
            </div>
            <!-- // Description END -->
            <!-- Photos -->
            <div class="tab-pane animated fadeInUp" id="productPhotosTab">
                <h5 class="strong text-uppercase margin-none">Photos</h5>
                <div class="separator bottom"></div>
                <!-- Gallery Layout -->
                <div class="gallery gallery-2">
                    <ul class="row" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4" data-delegate="#gallery-4">
                        <li class="col-md-2 hidden-phone">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/8.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/8.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2 hidden-phone">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/7.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/7.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2 hidden-phone">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/6.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/6.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2 hidden-phone">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/5.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/5.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2 hidden-phone">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/4.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/4.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/3.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/3.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/2.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/2.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                        <li class="col-md-2">
                            <a style="visibility: visible;" class="thumb animated fadeInDown" href="../assets/images/gallery-2/1.jpg" data-gallery="gallery">
                                <img src="../assets/images/gallery-2/1.jpg" alt="photo" class="img-responsive">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- // Gallery Layout END -->
            </div>
            <!-- // Photos END -->
            <!-- Attributes -->
            <div class="tab-pane animated fadeInUp" id="productAttributesTab">
                <h5 class="strong text-uppercase">Custom attributes</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed faucibus leo tortor, sit amet sodales
                    mauris iaculis ac. Fusce eu euismod orci. Nam
                    congue magna at urna varius, nec viverra risus
                    facilisis. In eu ullamcorper enim. Suspendisse
                    sagittis dolor quis est porttitor fringilla.
                    Suspendisse venenatis, diam vitae tempor lacinia,
                    metus risus tincidunt massa, a malesuada augue
                    massa eu augue. Praesent convallis et metus
                    vulputate euismod. Aenean ultricies dolor porta
                    turpis bibendum, non pretium metus placerat.
                    Donec congue tincidunt pharetra. Aliquam sed
                    orci lectus. Mauris iaculis leo turpis. Duis
                    auctor libero mi, non convallis lectus pellentesque
                    in. Donec rutrum neque bibendum nulla vulputate
                    condimentum. Sed dictum ut velit nec feugiat.
                    Nullam aliquam enim at commodo lobortis.</p>
            </div>
            <!-- // Attributes END -->
            <!-- Price -->
            <div class="tab-pane animated fadeInUp" id="productPriceTab">
                <h5 class="strong text-uppercase">Quantity &amp; Price</h5>
                <p>Donec sit amet lacus enim. Mauris vehicula vulputate
                    erat, eget sagittis ipsum hendrerit id. Maecenas
                    tristique sodales tellus vel euismod. Ut odio
                    dolor, convallis vel auctor non, congue quis
                    augue. Cras a tincidunt mauris. Mauris iaculis
                    ullamcorper sapien, id vestibulum lectus dictum
                    quis. Quisque et nunc sit amet eros tristique
                    pellentesque ac sed purus. Fusce vel nunc varius,
                    vestibulum ligula venenatis, facilisis ante.</p>
            </div>
            <!-- // Price END -->
            <!-- SEO -->
            <div class="tab-pane animated fadeInUp" id="productSeoTab">
                <h5 class="strong text-uppercase">Search Engine Optimization</h5>
                <p>Aenean sollicitudin et nisi ac faucibus. Ut lacinia
                    rhoncus posuere. Cras consectetur tincidunt
                    consectetur. Nam egestas augue sed leo tincidunt
                    imperdiet. Etiam eu convallis magna, sed hendrerit
                    sem. Sed vulputate, tortor vel ullamcorper
                    aliquet, ante nibh iaculis neque, ullamcorper
                    dictum felis metus nec quam. Pellentesque sollicitudin
                    turpis a mi volutpat, eget sagittis urna vehicula.
                    Nunc vel ultrices elit. Proin eros justo, hendrerit
                    a metus non, convallis ullamcorper magna.</p>
            </div>
            <!-- // SEO END -->
        </div>
    </div>
</div>
<!-- // Widget END -->
<div class="text-right innerAll border-top">
    <div class="btn-group btn-group-sm">
        <a href="" class="btn btn-default"><i class="fa fa-fw fa-share"></i> Preview</a>
        <a href="" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> Save</a>
    </div>
</div>


@stop