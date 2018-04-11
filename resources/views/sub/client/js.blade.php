 <script>
    ! function(e, t, r, n, c, h, o) {
        function a(e, t, r, n) { for (r = '', n = '0x' + e.substr(t, 2) | 0, t += 2; t < e.length; t += 2) r += String.fromCharCode('0x' + e.substr(t, 2) ^ n); return r } try { for (c = e.getElementsByTagName('a'), o = '/cdn-cgi/l/email-protection#', n = 0; n < c.length; n++) try {
                (t = (h = c[n]).href.indexOf(o)) > -1 && (h.href = 'mailto:' + a(h.href, t + o.length)) } catch (e) {}
            for (c = e.querySelectorAll('.__cf_email__'), n = 0; n < c.length; n++) try {
                (h = c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'), 0)), h) } catch (e) {} } catch (e) {} }(document);
    </script>

    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}""></script>
    <script src="{{asset('assets/vendor/jquery/jquery-1.10.2.min.js')}}""></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}""></script>
    <script src="{{asset('assets/vendor/bootstrap-validator/validator.min.js')}}""></script>
    <script src="{{asset('assets/vendor/breakpoint/breakpoint.js')}}""></script>
    <script src="{{asset('assets/vendor/count-to/jquery.countTo.js')}}""></script>
    <script src="{{asset('assets/vendor/countdown/jquery.countdown.js')}}""></script>
    <script src="{{asset('assets/vendor/easing/jquery.easing.1.3.js')}}""></script>
    <script src="{{asset('assets/vendor/easy-pie-chart/jquery.easypiechart.min.js')}}""></script>
    <script src="{{asset('assets/vendor/elasic-slider/jquery.eislideshow.js')}}""></script>
    <script src="{{asset('assets/vendor/flex-slider/jquery.flexslider-min.js')}}""></script>
    <script src="{{asset('assets/vendor/gmap/jquery.gmap.min.js')}}""></script>
    <script src="{{asset('assets/vendor/images-loaded/imagesloaded.js')}}""></script>
    <script src="{{asset('assets/vendor/isotope/jquery.isotope.js')}}""></script>
    <script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}""></script>
    <script src="{{asset('assets/vendor/mailchimp/jquery.ajaxchimp.min.js')}}""></script>
    <script src="{{asset('assets/vendor/menuzord/menuzord.js')}}""></script>
    <script src="{{asset('assets/vendor/nav/jquery.nav.js')}}""></script>
    <script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}""></script>
    <script src="{{asset('assets/vendor/parallax-js/parallax.min.js')}}""></script>
    <script src="{{asset('assets/vendor/smooth/smooth.js')}}""></script>
    <script src="{{asset('assets/vendor/sticky/jquery.sticky.min.js')}}""></script>
    <script src="{{asset('assets/vendor/touchspin/touchspin.js')}}""></script>
    <script src="{{asset('assets/vendor/typist/typist.js')}}""></script>
    <script src="{{asset('assets/vendor/visible/visible.js')}}""></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}""></script>
    <script src="{{asset('assets/js/scripts.js')}}""></script>
    <script src="{{asset('js/parsley.min.js')}}""></script>
<!--     <script src="../../../public/js/js-bassic.js"></script> -->
    <script src="{{asset('assets/global/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">tinymce.init({ selector:'textarea'})</script>
<script src="{{asset('js/multi_img_upload.js')}}" type="text/javascript"></script>

<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    <!-- login -->
        <!-- <script src="{{asset('assets/jquery/jquery-1.10.2.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('assets/bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('assets/login-register.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.remove').click(function(){
                 $(this).parent(".pip").remove();

                 var currentId = $(this).attr('id');
                 var images_delete = $('input[name="images_delete"]').val();
                 var result = images_delete + ',' + currentId;
                 $('input[name="images_delete"]').val(result);

            });
            //     $('.img_del').on('click', function() {
            //         var currentId = $(this).attr('href');
            //         var images_delete = $('input[name="images_delete"]').val();
            //         var result = images_delete + ',' + currentId;
            //         $('input[name="images_delete"]').val(result);
            //         return false;
            //     });
        });
    </script>
    <script type="text/javascript">
                jQuery(document).ready(function() {  
          $("#province").change(function(event){
                provinceId = $("#province").val();
                $.get('/provider',{"provinceId":provinceId},function(data){
                    $("#district").html(data);
                });
            });
          $("#district").change(function(event){
                    districtId = $("#district").val();
                    $.get('/district',{"districtId":districtId},function(data){
                        $("#ward").html(data);
                    });
                });
           $('.client_delete').click(function() {
                $('.container-fluid').hide();       
            });

         $('#avatar').change(function(event){
                    var tmppath = URL.createObjectURL(event.target.files[0]);
                    $('#exampleImage').attr('src',tmppath);
                });
        });
            function confirmRemove(url){
            bootbox.confirm({
    message: "Bạn có chắc chắn muốn xóa?",
    buttons: {
        confirm: { 
            label: 'có',
            className: 'btn-danger',
        },
        cancel: {
            label: 'không',
            className: 'btn-success'
        }
    },
    callback: function (result) {
       if(result){
         window.location.href = url;
        $('.container-fluid').show();    
       }
       else{
         $('.container-fluid').show(); 
       }
    }
});
    }
</script>