<?php include ("headernavbar.php"); ?>
<?php include ("mainsidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <h1 >Profile</h1>
    </section>

    <section class="content">
      <form role="form">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="fName">First Name</label>
              <input type="text" class="form-control" id="fName" placeholder="First name">
            </div>
            <div class="col-md-6">
              <label for="lName">Last Name</label>
              <input type="text" class="form-control" id="lName" placeholder="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <label for="inputAddr">Address</label>
              <input type="text" class="form-control" id="inputAddr" placeholder="Address">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="col-md-6">
              <label for="pw">Password</label>
              <input type="password" class="form-control" id="pw" placeholder="Password">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="telno">Telephone Number</label>
              <input type="text" class="form-control" id="telno" placeholder="Telephone Number">
            </div>
            <div class="col-md-6">
              <label for="celno">Cellphone Number</label>
              <input type="text" class="form-control" id="celno" placeholder="Cellphone Number">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> 
              <label for="bday">Birthday</label>
              <input type="text" class="form-control" id="bday" placeholder="Cellphone Number">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="uname">Username</label>
              <input type="text" class="form-control" id="uname" placeholder="Username">
            </div>
            <div class="col-md-6">
              <label for="pw">Password</label>
              <input type="password" class="form-control" id="pw" placeholder="Password">
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php include ("mainfooter.php"); ?>
