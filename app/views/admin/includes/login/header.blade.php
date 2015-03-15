<title>{{$title}}</title>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!--
**********************************************************
In development, use the LESS files and the less.js compiler
instead of the minified CSS loaded by default.
**********************************************************
<link rel="stylesheet/less" href="{{ URL::asset('assets/less/admin/module.admin.stylesheet-complete.sidebar_type.discover.less') }}" />
-->
<!--[if lt IE 9]><link rel="stylesheet" href="{{ URL::asset('assets/components/library/bootstrap/css/bootstrap.min.css') }}" /><![endif]-->
<link rel="stylesheet" href="{{ URL::asset('assets/css/admin/module.admin.stylesheet-complete.sidebar_type.discover.min.css') }}"
    />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script src="{{ URL::asset('assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
</script>