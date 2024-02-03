<h2>Let's see if jQuery and AJAX is FUN!!!</h2>
<p id="p1">This is some Lorem Ipsum text.</p>

<button class="hide_button">Let's see if hide extra content</button>


<script>
    $(document).ready(function(){
        $('body').on('click', '.hide_button', function(event) {
            // $('#div3').css('display', 'none');
            $('#div3').toggle();
        });

        // $('body').on('click', '.hide_button', function() {
        //     $('#div2').css('display', 'none');
        // });
    });
</script>