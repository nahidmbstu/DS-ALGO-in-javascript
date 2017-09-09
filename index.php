<!DOCTYPE html>
<html>
    <head>
        <title>ajax</title>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        <script type="text/javascript">

          

            $(function() // this function excited if the jquery is ready i mean after jquery successfully loaded
            {
                function loaddata()
                {

                    var moviename= $("#moviename").val(); // read moviename value and assign;

                    $.ajax({
                        type: "POST",
                        url: "query.php",
                        data: {
                            name:moviename // there is no variable name so you have to assign the moveiname to name vairable ;
                        },
                        success: function (data) {
                           $("#result").html(data);

                        }

                    });

                }


                $("#submit").click(function(event) // Click Event Listener.
                {
                    event.preventDefault();
                    loaddata()
                });
            });



        </script>
    </head>
    <body>


        <p>Enter movie name </p>
        <form action="" method="POST">
            <input type="text" name="moviename" id="moviename" placeholder="Enter Movie Name" required autocomplete="off">
            <input type="submit" name="submit" id="submit" value="Search"/>
            <!-- if you want ot use jquery you have to use event listener. like $("#submit").click(function(event){}); code from line 31 to 35 -->
        </form>
        <br>
       
        <div id="result">

        </div>

    </body>
</html
