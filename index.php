<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <main class="container">
    <div class="card mt-5">
    <div class="card-body">
        <form action="process.php" method="post">
        <div id="signatureparent">
        <div id="signature"></div>
        <div class="form-group text-center">
            <button type="button" class="btn btn-secondary" onclick="$('#signature').jSignature('clear')">Reset</button>
            <button type="button" id="btnSave" class="btn btn-primary ">Save Signature</button>
        </div>
        </div>
      
        <input type="hidden" id="hiddenSigData" name="hiddenSigData" />
        
        <div id="scrollgrabber"></div>
        <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    </div>

   
    <div id="scrollgrabber"></div>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="src/jSignature.js"></script>
    
    <script src="src/jSignature.js"></script>
    <script src="src/plugins/jSignature.CompressorBase30.js"></script>
    <script src="src/plugins/jSignature.CompressorSVG.js"></script>
    <script src="src/plugins/jSignature.UndoButton.js"></script> 
    <script>
        $(document).ready(function() {
            var $sigdiv = $("#signature").jSignature({'UndoButton':false});

            // -- i explain from here...
            $('#btnSave').click(function(){
                alert('Successfully capture signature!');
                var sigData = $('#signature').jSignature('getData','svg');
                $('#hiddenSigData').val(sigData);
                
            });
            // -- ... to here.

        })
    </script>
  </body>
</html>