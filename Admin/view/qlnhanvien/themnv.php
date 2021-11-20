


<style type="text/css">
	label{
		margin-left: 10px;
	}
</style>


<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Thêm Nhân Viên</h5>
        </div>
        <div class="card-body"> 
          <!-- Admin/model/QuanLyNhanVien/ThemNhanVien.php -->
          <form class="themnv" >
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Id Nhân viên </label>
                  <input type="text" value="" class="form-control" disabled="" placeholder="Company" >
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="form-group">
                  <label>SDT</label>
                  <input type="text" class="form-control" placeholder="SDT" id="sdt" name="sdt" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" required="required">
                </div>
              </div>
            </div>

            <div class="row">
            	<div class="col-md-4 col-12">
            		<div class="form-group">
  	                <label for="img_file">Ảnh</label>
  	                <input type="file" id="img_file" class="form-control"  style= "display: none;" >
  	                <img id="img" src="" width="100px" height="100px;" style="margin-top: 30px;margin-left: 30px;">
  	            </div>
            	</div>
            	<div class="col-md-8 col-12">
            		<div class="row">
            			<div class="col-md-12">
            				<div class="form-group">
  			                <label>First Name</label>
  			                <input type="text" class="form-control" placeholder="First Name"  id="firstname" name="firstname" required="required">
  			             </div>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-md-12">
            				<div class="form-group">
  			                <label>Last Name</label>
  			                <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname"required="required">
  			             
  			            </div>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="username" name="username" required="required">
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
                  <input type="text" class="form-control" placeholder="Địa Chỉ" id="diachi" name="diachi" required="required">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Ngày Sinh</label>
                  <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Giới Tính</label>
                  <select class="form-control" id="gioitinh" name="gioitinh" required="required">
                  	<option value="Nam">Nam</option>
                  	<option value="Nữ">Nữ</option>
                  </select>
                  <!-- <input type="text" class="form-control" > -->
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label>Chức Vụ</label>
                  <select class="form-control"  id="chucvu" name="chucvu" required="required">
                  	<option value="NV Kho">NV Kho</option>
                  	<option value="Nv Cửa Hàng">NV Cửa Hàng</option>
                  </select>
                </div>
              </div> 
            </div>
           
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" id="display" name="display" required="required">
                  	<option value="block">Đang Làm</option>
                  	<option value="none">Đã Nghỉ</option>
                  </select>
                </div>
              </div>
            </div>
           
          </form>
          <div class="form-group">
              <button class="btn"  id="submit" name="themnv" type="submit">Thêm</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
    $("#img_file").change(function(){
      var file = document.getElementById("img_file").files[0];
      if (file){
        var reader = new FileReader();
        reader.addEventListener("load",function(){
          document.getElementById("img").setAttribute("src",this.result);

        });
        reader.readAsDataURL(file);
      }
    });
  })
		
  $(document).ready(function (){
    $("button#submit").click(function(){
      if ($("#sdt").val() == "") {alert("Bạn chưa nhập số đt"); return false;$("#sdt").focus();}
      if ($("#email").val() == "") { alert("Bạn chưa nhập email"); return false;$("#email").focus();}
      if ($("#firstname").val() + $("#lastname").val() == ""){ alert("Bạn chưa nhập tên");return false;$("#firstname").focus();}
      if ($("#username").val()=="") { alert("Bạn chưa nhập username");return false;$("#username").focus();}
      if ($("#password").val() == ""){ alert("Bạn chưa nhập mật khẩu");return false;$("#password").focus();}
      if ($("#diachi").val() =="") {alert("Bạn chưa nhập địa chỉ");return false;$("#diachi").focus();}
      $.ajax({
          type: "POST",
          url: "Admin/model/QuanLyNhanVien/ThemNhanVien.php", //
          data: $('form.themnv').serialize(),
          success: function (msg) {
            alert(msg);
            location.reload();
              
          },
          error: function () {
              alert("failure");
          }
      });
    });
  });

</script>