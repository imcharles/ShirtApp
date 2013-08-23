<!doctype html>
<html lang="en">
<head>
  <?php include("application/templates/header.php"); 
  include("assets/js/JS.js");
    // include("applications/templates/footer.php");?>
  <meta name="Shirt Buildr, built by screenprinters for screenprinters" content="">
  <meta name="Coding Dojo Bootcamp June 24th 2013" content="Screenprinting layout and design web app">
<title>Shirt Buildr - The Design Tool for Screenprinters, by Screenprinters</title>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top plaid">
      <div class="container">
        <a class="navbar-brand" href="#">shirt buildr</a>
        <div class="nav-collapse collapse">
          <!--register modal link-->
          <a href="#register" role="button" data-toggle="modal" class="pull-right">or Register</a>
          <!--login boxes-->
          <?php
              // check if there are errors for login
              if($login_errors)
              {
                echo    "<div class='alert alert-danger span3'>
                            ". $login_errors ."
                        </div>";
              } 

              // check if there are errors for registration
              if(isset($register_errors) && $register_errors)
              {
                // displays registration errors
                echo    "<div class='alert alert-danger span3'>
                            ". $register_errors ."
                        </div>";
              }
              if(isset($register_success) && $register_success)
              {
                // echoes success message once the user has successfully registered
                echo    "<div class='alert alert-success span3'>
                            ". $register_success ."
                        </div>";
              }
            ?>
            <form action="/user/process_login" method="post" class="pull-right">
                <input type="hidden" name="action" value="login" />
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" value="Login" class="btn btn-primary btn-large"/>Login</button>
              </form>
        </div>
      </div>
    </div>  
  <!-- Registration Modal -->
  <div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header plaid">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title">Create an Account</h1>
        </div>
        <div class="modal-body">
              <form action="/user/process_register" method="post">
                <input type="hidden" name="action" value="register"/>
                <label for="first_name">First Name:  </label>
                <input type="text" name="first_name" placeholder="First Name"/><br />
                <div class="clear"></div>
                <label for="last_name">Last Name:  </label>
                <input type="text" name="last_name" placeholder="Last Name"/><br />
                <div class="clear"></div>
                <label for="email">Email:  </label>
                <input type="text" name="email" placeholder="Email address"/><br />
                <div class="clear"></div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password"/><br />
                <div class="clear"></div>
                <label for="confirm_password">Confirm Password:  </label>
                <input type="password" name="confirm_password" placeholder="Confirm Password"/><br />
                <div class="clear"></div>
        </div>
        <div class="modal-footer plaid">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary"value="Register"/>Register</button></form>
          </div>
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- / End Registration modal -->      
  <div class="main_banner">
    <div class="container">
      <img src="../assets/img/dude.png" alt="T-shirt">
      <div class="jumbotron plaid">
            <h1>Seamless, Affordable Corporate Screenprinting</h1>
            <p><a class="btn btn-primary btn-large right">Learn more</a></p>
        </div>
    </div>  
  </div>
  <div class="middle_banner">
    <div class="container">
      <!-- <div class="container"> -->
        <div class="row">
          <div class="col-lg-4 plaid">
            <h2>Simple Ordering</h2>
            <p>Just choose your garment, upload your logo with our design tool, and order as needed.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
          </div>
          <div class="col-lg-4 plaid">
            <h2>2-3 Day Turnaround</h2>
            <p>World class equipment allows us to delivery quality garments at industry leading turnaround times.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
         </div>
          <div class="col-lg-4 plaid">
            <h2>Free Onsite Visits and Delivery</h2>
            <p>Office visits to touch and feel the garments before you order. Free delivery upon order completion.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
          </div>
        </div>
    </div>
  </div> 
  <div class="bottom_banner">
    <div class="container">
      <h1>Visualize Your Design:</h1>
        <div class="row plaid">
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="../assets/img/tshirt_front.png" alt="t-shirt" class="img-swap" id='tshirt'>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="../assets/img/collared_front.png" alt="collared shirt" class="img-swap" id='collared'>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="../assets/img/sweatshirt_front.png" alt="sweatshirt" class="img-swap" id='sweatshirt'>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="hat_margin" class="thumbnail">
              <img data-toggle="modal" href="#myModal" src="../assets/img/hat_front.png" alt="hat" class="img-swap" id='hat'>
            </div>
          </div>
        </div>
      </div>
  </div> 
  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header plaid">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title">Design Your Garment</h1>
        </div>
        <div class="modal-body">
          <div class="product-preview pull-left"> 
            <div class="product">
              <img src="" alt="Shirt Image" id='image'/>
              <img id="tt-mask" class="mask" src="" alt="Mask Image" />
            </div>
            <div class="swatch">
              <a rel="255,255,255" href="#tt-mask" title="White">White</a>
              <a rel="32,223,95" href="#tt-mask" title="Green">Green</a>
              <a rel="255,211,8" href="#tt-mask" title="Yellow">Yellow</a>
              <a rel="255,101,8" href="#tt-mask" title="Orange">Orange</a>
              <a rel="16,200,255" href="#tt-mask" title="Blue">Blue</a>
              <a rel="255,0,0" href="#tt-mask" title="Red">Purple</a>
              <a rel="0,0,0" href="#tt-mask" title="Black">Red</a>
            </div> 
          </div>  
          <div id="upload_box" class="plaid pull-right">
            <h2>Upload Logo</h2>
            <h4>Drag Over Garment</h4>
             <span>
                <input  type="file" 
                        style="visibility:hidden; width: 1px;" 
                        id='${multipartFilePath}' name='${multipartFilePath}'  
                        onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
                <input class="btn btn-primary" type="button" value="Upload File..." onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
                &nbsp;
                <button type="submit" class="btn">Upload</button>
                <span  class="badge badge-important" ></span>
            </span>            
<!--             <div class="drag">
              <div class="handle NE"></div>
              <div class="handle NW"></div>
              <div class="handle SW"></div>
              <div class="handle SE"></div>
            </div> -->
            <select name id="ink" class="form-control"> 
              <option class="dropdown-header" value="">Number of Ink Colors</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <div class="clear"></div>
        </div> 
        <div class="modal-footer plaid">
          <div class="pull-right">
            <a type="button" data-dismiss="modal" >Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
          </div>
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->          
  <footer class="plaid">
    <p class="center">Shirt Buildr 2013</p>
  </footer>
</body>
</html>