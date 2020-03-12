<?php require("header.php");?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    
                    require_once("../config.php");
                    $cn = mysqli_connect(SERVER_NAME ,USER_NAME ,PASSWORD ,DB_NAME);
                    $rslt = mysqli_query($cn , "select id , fname , lname , email , created_at  from users order by created_at desc");
                    while($row = mysqli_fetch_assoc($rslt))
                    {

                   
                  ?>
                    <tr>
                      <td><?php echo $row["id"]?></td>
                      <td><?php echo $row["fname"]?></td>
                      <td><?php echo $row["lname"]?></td>
                      <td><?php echo $row["email"]?></td>
                      <td><?php echo $row["created_at"]?></td>
                    </tr>
                    <?php
                        }
                        mysqli_close($cn);
                  
                    ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>





        </div>
    </section>
    </div>


<?php require("footer.php");?>