<footer class="animatedParent animateOnce z-index-10">
    <div class="footer-main animated fadeInUp slow">&copy; 2021 <strong>Dr.Code</strong> Admin Theme by <a target="_blank" href="#/">Dr.Code</a> </div>
</footer>
<!-- /page container -->
<!--Load JQuery-->
<script src="/back/js/jquery.min.js"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="/back/js/plugins/css3-animate-it-plugin/css3-animate-it.js"></script>
<script src="/back/js/bootstrap.min.js"></script>
<script src="/back/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="/back/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="/back/js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="/back/js/plugins/flot/jquery.flot.min.js"></script>
<script src="/back/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/back/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="/back/js/plugins/flot/jquery.flot.selection.min.js"></script>
<script src="/back/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="/back/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="/back/js/functions.js"></script>
<script src="/back/js/plugins/select2/select2.full.min.js"></script>
<script src="/back/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="/back/DataTables/datatables.js"></script>


@yield('js')
<script>
    window.setTimeout(function () {
        $(".alert").slideUp(700, function () {
            $(this).remove();
        });
    }, 3000);
    $(".select2").select2();
    $(".select2-placeholer").select2({
        allowClear: true
    });


</script>
</body>
</html>

