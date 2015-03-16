@extends('admin.layouts.default')
@section('title','Pages')
<?
$title = 'Pages';
$menu = 'content';
?>
@section('content')
<h2 class="margin-none pull-left">Pages</h2>
<div class="btn-group btn-group-sm pull-right">
    <a href="{{ url('/admin/pages/add_page') }}" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add Page</a>
</div>
<div class="clearfix"></div>
<!-- Widget -->
<div class="widget widget-body-white">
<div class="widget-body padding-none">
<!-- Products table -->
<table
    class="table table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable ui-sortable">
<thead>
<tr>
    <th style="width: 1%;" class="uniformjs">
        <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
    </th>
    <th style="width: 1%;" class="center">No.</th>
    <th style="width: 25%;" class="left">Title</th>
    <th style="width: 25%;" class="left">Browser Title</th>
    <th class="left" style="width: 25%;">Actions</th>
</tr>
</thead>
<tbody>
<?
$i=1;
foreach($pages as $page){ ?>
    <tr class="selectable">
        <td class="center uniformjs">
            <div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div>
        </td>
        <td class="center"><?=$i?></td>
        <td class="important"><?=$page->title?></td>
        <td class="left"><?=$page->browser_title?></td>
        <td class="left">
            <a href="edit_page?action=edit&id=<?=$page->id?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
            <a href="edit_page?action=delete&id=<?=$page->id?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
        </td>
    </tr>
<? $i++;}?>

</tbody>
</table>
<!-- // Products table END -->
<!-- Options -->
<div class="">
    <!-- // With selected actions END -->
    <div class="pull-right">
        <?php echo $pages->links(); ?>
    </div>
    <div class="clearfix"></div>
    <!-- // Pagination END -->
</div>
<!-- // Options END -->
</div>
</div>
<!-- // Widget END -->

@stop