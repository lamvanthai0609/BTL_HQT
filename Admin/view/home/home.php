<?php

  if(isset($_POST["logout"]))
  {
      unset($_SESSION['id_nv']);
      unset($_SESSION['chucvu']);
      setcookie("username", "", time()-3600);
      setcookie("password", "", time()-3600);
      header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <?php require_once('Admin/view/home/header.php'); ?>
</head>
<style type="text/css">
  ul{
    list-style: none;
  }
  .btn{
    background-color: #f96332 !important;
  }
  .content{
    padding: 30px; 
    padding-top: 0px;
    margin-top: -30px;
  }
</style>
<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          CT
        </a>
        <a href="#" class="simple-text logo-normal">
          Quản Lý
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">


        <?php 
        if ($_SESSION['chucvu'] == "Admin") {
          ?>
              <ul class="nav">
                <li class="active ">
                  <a href="#" id="home">
                    <i class="now-ui-icons design_app"></i>
                    <p>Thông Tin</p>
                  </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu" aria-expanded="false" aria-controls="submenu">
                      <i class="fas fa-user-shield"></i>
                      <p>Quản lý nhân viên</p>
                    </a>
                    <ul class="collapse" id="submenu" data-bs-parent="#menu">
                        <li>
                          <a href="#" id="formkh">
                           <i class="fas fa-user-plus"></i>
                            <p>Danh sách nhân viên</p>
                          </a>
                        </li>
                        <li>
                          <a href="#" id="formxoakh">
                            <i class="fas fa-trash-alt"></i>
                            <p>Xóa nhân viên</p>
                          </a>
                        </li>
                        <li>
                          <a href="#" id="formluongnv">
                            <i class="fas fa-money-bill-wave"></i>
                            <p>Lương nhân viên</p>
                          </a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a href="#" id="formkhachhang">
                    <i class="fas fa-user-friends"></i>
                    <p>Quản lý khách hàng</p>
                  </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu1" aria-expanded="false" aria-controls="submenu1">
                      <i class="fas fa-suitcase"></i>
                      <p>quản lý nhà cung cấp</p>
                    </a>
                    <ul class="collapse" id="submenu1" data-bs-parent="#menu1">
                        <li>
                          <a href="#" id="formncc">
                           <i class="fas fa-user-plus"></i>
                            <p>Danh sách nhà cung cấp</p>
                          </a>
                        </li>
                        <li>
                          <a href="#" id="formxoancc">
                            <i class="fas fa-trash-alt"></i>
                            <p>Xóa nhà cung cấp</p>
                          </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu2" aria-expanded="false" aria-controls="submenu2">
                      <i class="fas fa-piggy-bank"></i>
                      <p>Quản lý khuyến mãi</p>
                    </a>
                    <ul class="collapse" id="submenu2" data-bs-parent="#menu2">
                        <li>
                          <a href="#" id="formkm">
                           <i class="fas fa-user-plus"></i>
                            <p>Danh sách khuyến mãi</p>
                          </a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-money-check-alt"></i>
                    <p>Thống kê doanh thu</p>
                  </a>
                </li>
              </ul>

          <?php
          
        }
        else if($_SESSION['chucvu'] == "NhanVien")
        {
          ?>
              <ul class="nav">
                <li class="active ">
                  <a href="#" id="home">
                    <i class="now-ui-icons design_app"></i>
                    <p>Thông Tin</p>
                  </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu" aria-expanded="false" aria-controls="submenu">
                      <i class="fas fa-user-shield"></i>
                      <p>Quản lý nhân viên</p>
                    </a>
                    <ul class="collapse" id="submenu" data-bs-parent="#menu">
                        <li>
                          <a href="#" id="">
                           <i class="fas fa-user-plus"></i>
                            <p>Danh sách nhân viên</p>
                          </a>
                        </li>
                        <li>
                          <a href="#" id="">
                            <i class="fas fa-trash-alt"></i>
                            <p>Xóa nhân viên</p>
                          </a>
                        </li>
                        <li>
                          <a href="#" id="">
                            <i class="fas fa-money-bill-wave"></i>
                            <p>Lương nhân viên</p>
                          </a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-money-check-alt"></i>
                    <p>Thống kê doanh thu</p>
                  </a>
                </li>
              </ul>
          <?php
        }
        else
        {

        }
        ?>
      </div>
    </div>
    <div class="main-panel" id="main-panel">



      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
               <form method="post">
                  <button class="nav-link" name="logout" style="background-color: transparent;color: white;border: 0px;">
                  <i class="now-ui-icons users_single-02"></i>
                </button>
               </form>
               <!--  <a class="nav-link" href="#pablo">
                  
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a> -->
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->





      <div id="content">
        <div class="panel-header panel-header-lg">
          <canvas id="bigDashboardChart"></canvas>
        </div>
        <div class="content" style="">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Global Sales</h5>
                  <h4 class="card-title">Shipped Products</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="lineChartExample"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">2018 Sales</h5>
                  <h4 class="card-title">All products</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Email Statistics</h5>
                  <h4 class="card-title">24 Hours Performance</h4>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="barChartSimpleGradientsNumbers"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card  card-tasks">
                <div class="card-header ">
                  <h5 class="card-category">Backend development</h5>
                  <h4 class="card-title">Tasks</h4>
                </div>
                <div class="card-body ">
                  <div class="table-full-width table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked>
                                <span class="form-check-sign"></span>
                              </label>
                            </div>
                          </td>
                          <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                              </label>
                            </div>
                          </td>
                          <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked>
                                <span class="form-check-sign"></span>
                              </label>
                            </div>
                          </td>
                          <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                          </td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">All Persons List</h5>
                  <h4 class="card-title"> Employees Stats</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th class="text-right">
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-right">
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-right">
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-right">
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-right">
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-right">
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('Admin/view/home/footer.php'); ?>
<script type="text/javascript">
   $(document).ready(function() {
      demo.initDashboardPageCharts();
    });
   $(document).ready(function(){
      $('#home').click(function(){
        location.reload();
      });
    });
</script>

  <?php 
    if ($_SESSION['chucvu'] == "NhanVien") {
      ?>
        <script type="text/javascript">
        
           $(document).ready(function(){
            $('#').click(function(){
              $.post('Admin/control/QuanLyNhanVien/QuanLyNhanVien.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
        </script>
      <?php
    }
    elseif ($_SESSION['chucvu'] == "Admin") {
      ?>
        <script>
         
          
          $(document).ready(function(){
            $('#formkh').click(function(){
              $.post('Admin/control/QuanLyNhanVien/QuanLyNhanVien.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('#formxoakh').click(function(){
              $.post('Admin/control/QuanLyNhanVien/XoaNhanVien.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('a#formkhachhang').click(function(){
              $.post('Admin/control/QuanLyKhachHang/QuanLyKhachHang.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('#formluongnv').click(function(){
              $.post('Admin/control/QuanLyNhanVien/LuongNhanVien.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('#formncc').click(function(){
              $.post('Admin/control/QuanLyNhaCungCap/DanhSachNhaCungCap.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('#formxoancc').click(function(){
              $.post('Admin/control/QuanLyNhaCungCap/XoaNhaCungCap.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          $(document).ready(function(){
            $('#formkm').click(function(){
              $.post('Admin/control/QuanLyKhuyenMai/DanhSachKhuyenMai.php',{},function(data){
                  $('#content').html(data);
              });
            });
          });
          setInterval(function(){
        
            let d = new Date();

            let datestring = d.getFullYear()  + "-" + (d.getMonth()+1) + "-" + d.getDate() + " " +
            d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

            $.post('Admin/model/QuanLyKhuyenMai/DanhSachKhuyenMai.php',{functionname:datestring},function(data){});
        
          },1000);
        </script>
      <?php
    }
    else
    {

    }

  ?>
  
</body>

</html>