<!DOCTYPE html>
<html lang="en">
  <title>Admin | 411Jobs</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,r-1.0.7,sc-1.3.0/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.css">
  <?php include 'includes/head.php';?>
  <body class="body" id="admin-page">
    <!-- page wrapper -->
    <div class="wrapper">
      <!-- header-top-bar -->
        <?php include 'includes/header.php'; ?>
      <!-- header-top-bar ends -->

      <!-- contents -->
      <div class="content">
        <div class="container">
          <!-- header-top-bar -->
            <?php include 'includes/admin-nav.php'; ?>
          <!-- header-top-bar ends -->
          <!--  main-content-->
          <div class="main-content">
            <!-- post title bar -->
            <div class="row">
              <!-- sidebar left -->
              <div class="col-md-2">
               <div class="panel panel-default">
                <div class="panel-body">
                <legend>Settings</legend>
                <ul class="list-group nav nav-tabs nav-stacked">
                  <li><a href="#overview" data-toggle="tab">Overview</a></li>
                  <li class="active"><a href="#posts" data-toggle="tab">Posts</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                </div>
               </div>
              </div>
              <div class="col-md-10">
                <div class="tab-content" id="adminTab">
                  <div id="overview" class="tab-pane fade">
                    <p>hello</p>
                  </div>
                  <div id="posts" class="tab-pane fade active in">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Tags</th>
                                <th>Author</th>
                                <th>Comments</th>
                                <th>Date Posted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Developer Relations Ecosystem Program Manager, Sub-Saharan Africa</td>
                                <td><span>google</span>, <span>programme management</span>, <span>lagos</span></td>
                                <td>Bolaji Alade</td>
                                <td>2 <i class="fa fa-comment"></i></td>
                                <td>12 Oct 2015</td>
                                <td><span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-eye"></span><span class="btn btn-sm fa fa-trash"></span></td>
                            </tr>
                            <tr>
                                <td>Contract Administrator</td>
                                <td><span>saipem</span>, <span>Oil & Gas</span>, <span>lagos</span></td>
                                <td>Samizares</td>
                                <td>4 <i class="fa fa-comment"></i></td>
                                <td>11 Oct 2015</td>
                                <td><span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-eye"></span><span class="btn btn-sm fa fa-trash"></span></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <di id="settings" class="tab-pane fade"><p>hi</p></div>
                </div>
              </div>
            </div> <!-- row ends -->
          </div> <!-- main-content ends -->
        </div> <!-- container ends -->
        <!-- footer -->
          <?php include 'includes/footer.php'; ?>
      </div>
      <!-- content ends -->
    </div>
    <!-- page wrapper ends -->

    <?php include 'includes/core-scripts.php'; ?>
    <script src="https://cdn.datatables.net/r/bs/dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,r-1.0.7,sc-1.3.0/datatables.min.js"></script>
      <script type="text/javascript">
          // datatables
          $(document).ready( function () {
              $('#table_id').DataTable();
          } );
          // tooltip
          $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
          });
          // tinymce
          $(document).ready(function(){
            tinymce.init({selector:'textarea.textArea'});
          });
      </script>
  </body>
</html>
