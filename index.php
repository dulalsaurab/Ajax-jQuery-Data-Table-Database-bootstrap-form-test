<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Saurab Dulal" content="">
    <title>Ajax, jQuery Data Table, bootstrap form test</title>

    <!-- Bootstrap core CSS and jQuery Data Table CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">


  </head>

  <body>

    <!--Bootstrap fixed nav bar with some drop down demo Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AJAX,PHP,DataBase Test</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="formSubmission.php">SubmitYourForm </a></li>
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 class='text-center'>Ajax Test</h1>
        
            <form class="form-horizontal" role="form">
              <div class="row">
              <div class="form-group">
                <div class="text-center col-sm-1"></div>
              
                <div class="text-center col-sm-10">
                  <input type="text" id="searchText" class="text-center form-control" id="email" placeholder="Enter a name or address to search">
                </div>
              </div>
              </div>


              <div class="form-group pull-right"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-default" onclick="formSubmition();">Submit</button> <!-- button generating ajax request and ploting data-->
                </div>
              </div>
            </form>


            <div id='table' style="display: none;">   <!-- hiding table first, only showing after data is return -->
            <table id="example" class="table display"  width="100%"> <!-- data table html initialization -->
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>CompanyName</th>
                          <th>CompanyPhone</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>CompanyName</th>
                          <th>CompanyPhone</th>
                        </tr>
                  </tfoot>
              </table>
            </div>




      </div>

    </div> <!-- /container -->

    <script>

      function formSubmition(){
                  

            // $(document).ready( function() {
              // document.getElementById('table').style.visibility='true'; 
              
              $('#example').dataTable( {

                            sAjaxDataProp: "",
                            "bDestroy": true,
                            "aoColumns": [
                                               { "mData": "name" },
                                               { "mData": "mobileNo" },
                                               { "mData": "email" },
                                               { "mData": "address" },
                                               { "mData": "comapnyName" },
                                               { "mData": "companyPhone" }
                                          ],

                            "ajax": {
                                  'type': 'POST',
                                  'url': 'ajaxHandler.php',
                                  'data':{  text: $('#searchText').val()},

                             },
                              "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25,50, "All"]],
                              "iDisplayLength": 5 

                            } );
              // } );
            $('#table').show();
    

          }




    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  
  </body>
</html>
