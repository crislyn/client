<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      $host = "localhost";
      $user = "root";
      $passwd = "";
      $db = "webtek-database-finals";
      $connect = mysqli_connect($host, $user, $passwd);
      mysqli_select_db($connect,$db); 
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to Cooking Tutorial
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <img src = "pics/chef.jpg" class="pic center-block">
      <p>Cooking or cookery is the art, technology and craft of preparing food for consumption with or without the use of heat. Cooking techniques and ingredients vary widely across the world, from grilling food over an open fire to using electric stoves, to baking in various types of ovens, reflecting unique environmental, economic, and cultural traditions and trends. The ways or types of cooking also depend on the skill and type of training an individual cook has.</p>
      <p>There are very many methods of cooking, most of which have been known since antiquity. These include baking, roasting, frying, grilling, barbecuing, smoking, boiling, steaming and braising. A more recent innovation is microwaving. Various methods use differing levels of heat and moisture and vary in cooking time. The method chosen greatly affects the end result because some foods are more appropriate to some methods than others.</p>
        <h3> Tutorials </h3>           
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Topics</th>  
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>How to cook Chicken Adobo.</td>
            <td>
              <div class="col-md-7 col-md-offset-5">
                <button data-toggle="collapse" data-target="#sp" class="btn btn-primary">Available Service Providers</button>
                <div id="sp" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    $btag = '
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a></span>
                    </div>';
                    
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                      }
                    }
                  ?>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
          <tr>
             <td>How to cook Beef Curry.</td>
            <td>
              <div class="col-md-7 col-md-offset-5">
                <button data-toggle="collapse" data-target="#sp1" class="btn btn-primary">Available Service Providers</button>
                <div id="sp1" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    $btag = '
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a></span>
                    </div>';
                    
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                      }
                    }
                  ?>
                  </ul>
                </div>
              </div>
            </td>
            
          </tr>
          <tr>
             <td>How to cook Calamares.</td>
            <td>
              <div class="col-md-7 col-md-offset-5">
                <button data-toggle="collapse" data-target="#sp2" class="btn btn-primary">Available Service Providers</button>
                <div id="sp2" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    $btag = '
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a></span>
                    </div>';
                    
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                      }
                    }
                  ?>
                  </ul>
                </div>
              </div>
            </td>
            
          </tr>
        </tbody>
      </table>


    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  </div>