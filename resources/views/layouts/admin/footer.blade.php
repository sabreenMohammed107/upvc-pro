<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2020. All rights reserved by <a href="#">Ultimatrue</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<body>



    <!-- jquery
		============================================ -->
    <script src="{{ asset('dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('dashboard/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('dashboard/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu-active.js') }}"></script>

	<!-- chosen JS
		============================================ -->
	<script src="{{ asset('dashboard/js/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('dashboard/js/chosen/chosen-active.js') }}"></script>
	<!-- select2 JS
		============================================ -->
	<script src="{{ asset('dashboard/js/select2/select2.full.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/select2/select2-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- form validate JS
		============================================ -->
    <script src="{{ asset('dashboard/js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/form-active.js') }}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('dashboard/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{ asset('dashboard/js/tawk-chat.js') }}"></script> --}}

    <!-- notification JS
		============================================ -->
    <script src="{{ asset('dashboard/js/notifications/Lobibox.js') }}"></script>
    <script src="{{ asset('dashboard/js/notifications/notification-active.js') }}"></script>

    <!-- data table JS
		============================================ -->
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/tableExport.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/data-table-active.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-editable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-editable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-resizable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/colResizable-1.5.source.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-export.js') }}"></script>

<!-- summernote JS
		============================================ -->
  <script src="{{ asset('dashboard/js/summernote/summernote.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/summernote/summernote-active.js') }}"></script>
  
  <script>
    $(document).ready(function () {

        // $('.sidebar-menu').tree();

        //icheck
        // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        //     checkboxClass: 'icheckbox_minimal-blue',
        //     radioClass: 'iradio_minimal-blue'
        // });

        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "Confirm Delete",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("Yes", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("No", 'btn btn-danger', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        // $(".image").change(function () {
        //
        //     if (this.files && this.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.image-preview').attr('src', e.target.result);
        //         }
        //
        //         reader.readAsDataURL(this.files[0]);
        //     }
        //
        // });

        // CKEDITOR.config.language =  "{{ app()->getLocale() }}";

    });//end of ready
    
</script>