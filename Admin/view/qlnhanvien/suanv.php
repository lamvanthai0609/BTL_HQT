<style type="text/css">
	label{
		margin-left: 10px;
	}
</style>


<div class="panel-header panel-header-sm">
</div>
<div class="content">
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Edit Nhân Viên</h5>
      </div>
     <div class="card-body"> 
          <!-- Admin/model/QuanLyNhanVien/ThemNhanVien.php -->
          <form class="suanv" >
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Id Nhân viên </label>
                  <input type="text" value="<?php echo $data['id_nv']; ?>" class="form-control" disabled="">
                  <input style="display: none;" type="text" value="<?php echo $data['id_nv']; ?>" class="form-control"  id="id_nv" name = "id_nv" placeholder="Company" required="required">
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="form-group">
                  <label>SDT</label>
                  <input type="text" value="<?php echo $data['SDT_nv']; ?>" class="form-control" placeholder="SDT" id="sdt" name="sdt" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" value="<?php echo $data['Email_nv']; ?>" class="form-control" placeholder="Email" id="email" name="email" required="required">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-12">
                <div class="form-group">
                    <label for="img_file">Ảnh</label>
                    <input type="file" id="img_file" class="form-control"  style= "display: none;" >
                    <img id="img"  src="<?php echo $data['anh_nv']; ?>" width="100px" height="100px;" style="margin-top: 30px;margin-left: 30px;">
                </div>
              </div>
              <div class="col-md-8 col-12">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" value="<?php print_r(explode(" ",$data['ten_nv'])[count(explode(" ",$data['ten_nv']))-1]); ?>" class="form-control" placeholder="First Name"  id="firstname" name="firstname" required="required">
                     </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Last Name</label>
                       
                        
                        
                        <input type="text" value="<?php $name=""; for($i=0;$i<count(explode(" ",$data['ten_nv']))-1; $i++)
                                                        {
                                                          $name .= explode(" ",$data['ten_nv'])[$i];
                                                        } 
                                                        echo $name; 
                                                        ?>"
                                class="form-control" placeholder="Last Name" id="lastname" name="lastname"required="required">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" value="<?php echo $data_login['username'] ?>" class="form-control" placeholder="Username" id="username" name="username" required="required" disabled="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" placeholder="Password" id="password" name="password" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Địa Chỉ</label>
                  <input type="text" value="<?php echo $data['diachi_nv']; ?>" class="form-control" placeholder="Địa Chỉ" id="diachi" name="diachi" required="required">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Ngày Sinh</label>
                  <input type="date" value="<?php echo $data['ngaysinh_nv']; ?>" class="form-control" id="ngaysinh" name="ngaysinh" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Giới Tính</label>
                  <select class="form-control" id="gioitinh" name="gioitinh" required="required">
                    <?php 
                    if($data['gioitinh_nv'] == "Nam")
                    {
                      ?>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                      <?php
                    }
                    else
                    {
                      ?>
                        <option value="Nữ">Nữ</option>
                         <option value="Nam">Nam</option>
                      <?php
                    }
                    ?>
                   
                  </select>
                  <!-- <input type="text" class="form-control" > -->
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Chức Vụ</label>
                  <select class="form-control"  id="chucvu" name="chucvu" required="required">
                     <?php 
                    if($data['chucvu_nv'] == "NV Kho")
                    {
                      ?>
                        <option value="NV Kho">NV Kho</option>
                        <option value="Nv Cửa Hàng">NV Cửa Hàng</option>
                      <?php
                    }
                    else
                    {
                      ?>
                         
                        <option value="Nv Cửa Hàng">NV Cửa Hàng</option>
                        <option value="NV Kho">NV Kho</option>
                      <?php
                    }
                    ?>



                    
                  </select>
                </div>
              </div> 
            </div>
           
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" id="display" name="display" required="required">
                     <?php 
                    if($data['display_nv'] == "block")
                    {
                      ?>
                        <option value="block">Đang Làm</option>
                        <option value="none">Đã Nghỉ</option>
                      <?php
                    }
                    else
                    {
                      ?>
                         
                        <option value="none">Đã Nghỉ</option>
                        <option value="block">Đang Làm</option>
                      <?php
                    }
                    ?>
                   
                  </select>
                </div>
              </div>
            </div>
           
          </form>
          <div class="form-group">
              <button class="btn"  id="submit" name="suanv" type="submit">Thay Đổi</button>
          </div>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-user">
      <div class="image">
        <img src="<?php echo $data['anh_nv']; ?>" alt="...">
      </div>
      <div class="card-body">
        <div class="author">
          <a href="#">
            <img class="avatar border-gray" src="<?php echo $data['anh_nv']; ?>" alt="...">
            <h5 class="title"><?php echo $data['ten_nv']; ?></h5>
          </a>
          <p class="description">
            <?php echo $data['ten_nv']; ?>
          </p>
        </div>
        <p class="description text-center">
          "Lamborghini Mercy <br>
          Your chick she so thirsty <br>
          I'm in that two seat Lambo"
        </p>
      </div>
      <hr>
      <div class="button-container">
        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
          <i class="fab fa-facebook-f"></i>
        </button>
        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
          <i class="fab fa-twitter"></i>
        </button>
        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
          <i class="fab fa-google-plus-g"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
	function hienanh()
		{
			var file = document.getElementById("img_file").files[0];
			if (file)
			{
				var reader = new FileReader();
				reader.addEventListener("load",function(){
					document.getElementById("img").setAttribute("src",this.result);

				});
				reader.readAsDataURL(file);
			}

		};



    $(document).ready(function (){
    $("button#submit").click(function(){
      if ($("#sdt").val() == "") {alert("Bạn chưa nhập số đt"); return false;$("#sdt").focus();}
      if ($("#email").val() == "") { alert("Bạn chưa nhập email"); return false;$("#email").focus();}
      if ($("#firstname").val() + $("#lastname").val() == ""){ alert("Bạn chưa nhập tên");return false;$("#firstname").focus();}
      if ($("#username").val()=="") { alert("Bạn chưa nhập username");return false;$("#username").focus();}
      if ($("#password").val() == ""){ alert("Nếu bạn ko nhập mk thì đó chính là mk cũ của nhân viên");}
      if ($("#diachi").val() =="") {alert("Bạn chưa nhập địa chỉ");return false;$("#diachi").focus();}
      
      $.ajax({
          type: "POST",
          url: "Admin/model/QuanLyNhanVien/SuaNhanVien.php", 

          data: $('form.suanv').serialize(),
            

          
          success: function (msg) {
            alert(msg);
            location.reload();
              
          }
         
      });

      
    });
  });
</script>