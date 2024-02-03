<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            var div1 = $('#div1');

            $("button").click(function(){
                var buttonText = $(this).text();
                $.ajax({
                    type: "POST",
                    url: "demo_test.php",
                    // Για να στείλω data στο page που καλώ με Ajax χρησιμοποιώ το 
                    // data και μέσα περνάω τα δεδομένα που θέλω να στείλω
                    data: {
                        // id: div1.text()
                        id: div1.html(),
                        button: buttonText,
                        name: 'Paschalis'
                    },
                    // προσδιορίζω τον type των data που περιμένω να μου επιστραφεί, δεν ειναι υποχρεωτικό πεδίο - μπορώ δηλαδή να και να μην το βάλω καν
                    // αν δεν είναι σωστός ο τύπος που θα βάλω, αν πχ βάλω html και ο server στένει JSON, τότε δεν μου επιστρέφονται καθόλου δεδομένα.
                    dataType: "html",
                    success: function(result){
                        $("#div2").html(result);
                    }
                });
            });

            // $('body').on('click', '.hide_button', function() {
            //     $('#div2').css('display', 'none');
            // });
        });
    </script>
</head>
<body>

    <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
    
    <button>Get External Content</button>
    
    <div id="div2"><h2></h2></div>
    
</body>
</html>