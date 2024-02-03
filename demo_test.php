<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        $(document).ready(function(){
            $('body').on('click', 'button', function(event) {
                div3 = $('#div3');
                event.preventDefault();
                // event.stopPropagation();
                console.log(event);
                console.dir(event);
                $.ajax({
                    url: "new_demo_test.php", 
                    success: function(data){
                        $("#div3").html(data);
                    }
                });
            

            

            if(div3.css('display')=='none'){
                div3.css('display', 'block');
            }

            // $('body').on('click', '.hide_button', function() {
            //     $('#div2').css('display', 'none');
            // });
            });
        });
    </script>

    <script>
        // $( "#list a" ).on( "click", function( event ) {
        //     event.preventDefault();
        //     console.log( $( this ).text() );
        // });

        
        $( "#list" ).on( "click", "a", function( event ) {
            event.preventDefault();
            console.log( $( this ).text() );
        });
        
        $( "#list" ).append( "<li><a href='http://newdomain.com'>Item #5</a></li>" );
    </script>


</head>
<body>

    <h2>jQuery and AJAX is FUN!!!</h2>
    <?
    /*
    var_dump($_POST);
    */
    ?>
    <? /*
    <? echo $_POST['id']?>
    <h2><? echo $_POST['id']?></h2>
    */ ?>
    <? echo $_REQUEST['id']?>
    <h2><? echo $_REQUEST['id']?></h2>
    <h2><? echo $_REQUEST['name'] . '<br/>'?></h2>
    <? echo $_REQUEST['button']?>
    <h2><? echo $_REQUEST['button']?></h2>

    <p id="p1">This is some text in a paragraph.</p>

    <button class="hide_button">Hide extra content</button>

    
    <div id="container">
        <ul id="list">
            <li><a href="http://domain1.com">Item #1</a></li>
            <li><a href="/local/path/1">Item #2</a></li>
            <li><a href="/local/path/2">Item #3</a></li>
            <li><a href="http://domain4.com">Item #4</a></li>
        </ul>
    </div>
    
    <div id="div3"></div>
</body>
</html>