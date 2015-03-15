<!-- Global -->
<script data-id="App.Config">
    var App = {};
    var basePath = '',
        commonPath = "{{ URL::asset('assets')}}",
        rootPath = '../',
        DEV = false,
        componentsPath = "{{ URL::asset('assets/components/')}}";
    var primaryColor = '#3695d5',
        dangerColor = '#b55151',
        successColor = '#609450',
        infoColor = '#4a8bc2',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
    var themerPrimaryColor = primaryColor;
</script>
<script src="{{ URL::asset('assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1') }}"></script>
<script src="{{ URL::asset('assets/components/core/js/animations.init.js?v=v1.0.3-rc2') }}"></script>
<script src="{{ URL::asset('assets/components/core/js/core.init.js?v=v1.0.3-rc2') }}"></script>