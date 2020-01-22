<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.7.4/jquery.viewportchecker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.0.3/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.5.14/jquery.colorbox-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="{{ url('demos/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
<script src="{{ url('demos/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
<!-- End SLIDER REVOLUTION SCRIPTS  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.1.0/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.pkgd.min.js"></script>
<script src="{{ url('js/jquery.fs.tipper.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.9/mediaelement-and-player.min.js"></script>

<script src="{{ url('js/revolution-slider.js') }}" type="text/javascript"></script>
<script src="{{ url('js/theme.js') }}" type="text/javascript"></script>
<script src="{{ url('js/verify.js') }}" type="text/javascript"></script>
<script src="{{ url('js/all.js') }}" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
    jQuery(document).ready(function() {
        let count =  $('#countdown');
        if(count.length >0){
            count.countDown({
                targetDate: {
                    'day': 6,
                    'month': 6,
                    'year': 2020,
                    'hour': 0,
                    'min': 0,
                    'sec': 0
                }
            });
        }

    });
</script>

