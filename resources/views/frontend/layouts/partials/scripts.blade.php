<!-- <script src="{{ asset('frontend/assets/js/') }}/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()>300){
                $('.gotoup').fadeIn();
            }else{
                $('.gotoup').fadeOut();
            }
        });
        $('.gotoup').click(function(){
            $('html,body').animate({scrollTop:0},1000);
        });
    });
</script>
<script src="{{ asset('frontend/assets/js/') }}/popper.min.js"></script>
<script src="{{ asset('frontend/assets/js/') }}/bootstrap.min.js"></script>
