<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap grid system</title>
  
    <meta charset="utf-8">
  
    <meta name="viewport" content=
        "width=device-width, initial-scale=1">
          
    <!-- Bootstrap CSS library -->
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
      
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
      
    <!-- JS library -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity=
"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
      
    <!-- Latest compiled JavaScript library -->
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity=
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    </head>
<body>
    <!--Creating Two Column Layouts-->
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="background-color:#abb1b8;">hello</div>
      
            <div class="col-md-6"style="background-color:#dbdfe5;"> good day </div>
             
        </div>
    </div>
    <br>
    <!--Creating 3 Column Layouts-->
    <div class="container">
  
  <div class="row">
    <div class="col-md-4" style="background-color:#abb1b8;">welcome</div>
    <div class="col-md-4" style="background-color: orange;">TARUC</div>
    <div class="col-md-4" style="background-color:#abb1b8;">Thank you</div>
  </div>
</div>
    <br>
    <!--Bootstrap Auto-layout Columns-->
    <div class="container">
    <div class="row">
        <div class="col" style="background-color:#abb1b8;">good day</div>
        <div class="col"style="background-color:#dbdfe5;">bye</div>
    </div>
        <br>
        
        <!-- Columns without Gutters -->
        <div class="container mt-3">
        <div class="row no-gutters">
            <div class="col-4">
                <div class="demo-content"style="background-color:#abb1b8;"> hello</div>
            </div>
            <div class="col-4">
                <div class="demo-content bg-alt"style="background-color:#abb1b8;">welcome</div>
            </div>
            <div class="col-4">
                <div class="demo-content"style="background-color:#abb1b8;">nice day</div>
            </div>
        </div>
    </div>
       <br>
       


       <!-- Columns  Gutters -->
        <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <div class="demo-content"style="background-color:#abb1b8;">apple</div>
            </div>
            <div class="col-4">
                <div class="demo-content bg-alt"style="background-color:#abb1b8;">papaya</div>
            </div>
            <div class="col-4">
                <div class="demo-content"style="background-color:#abb1b8;">durian</div>
            </div>
        </div>
    </div>
       <br>
       <!--Creating Multi-Column Layouts with Bootstrap-->
       <div class="container">
    <div class="row">
        <div class="col-lg-4"style="background-color:#abb1b8;"><p>red</p></div>
        <div class="col-lg-4"style="background-color:#dbdfe5;"><p>purple</p></div>
        <div class="col-lg-4"style="background-color:#abb1b8;"><p>Blue</p></div>
        <div class="col-lg-4"style="background-color:#abb1b8;"><p>yellow</p></div>
        <div class="col-lg-4"style="background-color:#dbdfe5;"><p>pink</p></div>
        <div class="col-lg-4"style="background-color:#abb1b8;"><p>black</p></div>
        <!--  <div class="col-lg-4 col-md-6"style="background-color:#abb1b8;"><p>Box 1</p></div>
        customize Multi-Column Layouts with Bootstrap-->
    </div>
</div>    
<br>
        <!-- offsetting the grid colomn -->
       <div class="container">
    <div class="row">
        <div class="col-md-3"style="background-color:#abb1b8;">
            <div class="demo-content">.col-md-3</div>
        </div>
        <div class="col-md-3"style="background-color:#abb1b8;">
            <div class="demo-content bg-alt">.col-md-3</div>
        </div>
        <div class="col-md-3"style="background-color:#abb1b8;">
            <div class="demo-content">.col-md-3</div>
        </div>
       
        <div class="col-md-4 offset-md-8"style="background-color:#abb1b8;">
            <div class="demo-content">.col-md-3 .offset-md-3</div>
        </div>
    </div>
</body> </html>
