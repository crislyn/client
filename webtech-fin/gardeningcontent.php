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
        Welcome to Gardening Tutorial
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<img src = "pics/garden.jpg" class="pic">
	
    <h3> Tutorials </h3>           
	<table class="table table-hover">
    <thead>
      <tr>
		<th>Topics</th>
        <th></th>
               
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>How To Plant An Urban Garden.</td>
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
         <td>How To Start A Vegetable Garden (part1)</td>
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
         <td>How To Start A Vegetable Garden (part2).</td>
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
  </div>
  <!-- /.content-wrapper -->