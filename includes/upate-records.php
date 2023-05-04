<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax Filteration</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assests/css/registration-form.css" />
  </head>
  <body>
    <div class="col-md-1 col-1 col-sm-1 text-center bg-danger rounded-5" id="close">X</div>
  <div class="container mt-5">
        <div class="form-wrapper">
          <h1 id="form-heading">Registration Form</h1>
          <form method="post" enctype="multipart/form-data">
  <?php
include 'connection.php';
$id = $_POST['id'];
$query = "SELECT * FROM `users` WHERE id=$id";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    while($data2 = mysqli_fetch_assoc($result)){
        echo' 
          <div class="row">
          <div class="col-md-9 col-sm-8 col-7">
            <input type="text" value="'.$data2['id'].'""   hidden name="userImage" id="userId" />
          </div>
         </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Image:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input type="file" value="'.$data2['image'].'""  name="userImage" id="userImage" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Name:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['name'].'"
                  type="text"
                  name="User-name"
                  id="user-name"
                  placeholder="Enter Your Name"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Email:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['email'].'"
                  type="email"
                  name="User-email"
                  id="user-email"
                  placeholder="Enter Your Email"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Phone:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['phone'].'"
                  type="number"
                  name="User-phone"
                  id="user-number"
                  placeholder="Enter Your Phone Number"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Country:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['country'].'"
                  type="text"
                  name="User-country"
                  id="user-country"
                  placeholder="Enter Your Country"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">State:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['state'].'"
                  type="text"
                  name="User-state"
                  id="user-state"
                  placeholder="Enter Your State"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">City:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['city'].'"
                  type="text"
                  name="User-city"
                  id="user-city"
                  placeholder="Enter Your City"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-4 col-5">
                <label class="form-labels">Password:-</label>
              </div>
              <div class="col-md-9 col-sm-8 col-7">
                <input
                value="'.$data2['pass'].'"
                  type="text"
                  name="User-pass"
                  id="user-pass"
                  placeholder="Enter Your password"
                />
              </div>
            </div>
            
        ';
    }
}
?>
        <div class="row">
              <div class="submit-button col-md-12 col-sm-12 col-12">
                <input
                  type="submit"
                  name="btn-update"
                  id="btn-update"
                  class="bg-success"
                />
              </div>
            </div>
          </form>
   </div>
      </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="assests/js/update-records-ajax.js"></script>
</html>
