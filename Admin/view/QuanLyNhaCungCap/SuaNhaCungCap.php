


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
              <div class="col-md-12">
                <div class="form-group">
                  <label>id Nhà Cung cấp</label>
                  <input type="text" class="form-control" value="<?php echo $data['id_ncc'] ?>" placeholder="Địa Chỉ" disabled="" required="required">
                  <input type="text" style="display: none;" value="<?php echo $data['id_ncc'] ?>" name="idncc" id="idncc">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Tên Nhà Cung Câp </label>
                  <input type="text" value="<?php echo $data['ten_ncc'] ?>" class="form-control" id="tenncc" name="tenncc" placeholder="Tên Nhà Cung Câp" >
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="form-group">
                  <label>SDT</label>
                  <input type="text" value="<?php echo $data['SDT_ncc'] ?>" class="form-control" placeholder="SDT" id="sdt" name="sdt" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" value="<?php echo $data['Email_ncc'] ?>" placeholder="Email" id="email" name="email" required="required">
                </div>
              </div>
            </div>

        



            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Địa Chỉ</label>
                  <input type="text" class="form-control" value="<?php echo $data['diachi_ncc'] ?>" placeholder="Địa Chỉ" id="diachi" name="diachi" required="required">
                </div>
              </div>
            </div>

            
           
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" id="display" name="display" required="required">
                  	<?php if ($data['display_ncc'] == "block") {
                  		?>
                  		<option value="block">Đang Giao Dịch</option>
                  		<option value="none">Ngưng Giao Dịch</option>
                  		<?php
                  	} 
                  	else
                  	{
                  		?>
                  		<option value="none">Ngưng Giao Dịch</option>
                  		<option value="block">Đang Giao Dịch</option>
                  		<?php
                  	}
                  	?>
                  	
                  </select>
                </div>
              </div>
            </div>
           
          </form>
          <div class="form-group">
              <button class="btn"  id="submit" name="themnv" type="submit">Cập Nhật</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	
		
  $(document).ready(function (){
    $("button#submit").click(function(){

      if ($("#idncc").val() == "") {alert("Bạn chưa nhập số đt"); return false;$("#idncc").focus();}
      if ($("#tenncc").val() == "") {alert("Bạn chưa nhập số đt"); return false;$("#tenncc").focus();}
      if ($("#sdt").val() == "") {alert("Bạn chưa nhập số đt"); return false;$("#sdt").focus();}
      if ($("#email").val() == "") { alert("Bạn chưa nhập email"); return false;$("#email").focus();}
      if ($("#diachi").val() =="") {alert("Bạn chưa nhập địa chỉ");return false;$("#diachi").focus();}
      $.ajax({
          type: "POST",
          url: "Admin/model/QuanLyNhaCungCap/SuaNhaCungCap.php", //
          data: $('form.themnv').serialize(),
          success: function (msg) {
         
            if (msg.length == 3) 
            {
            	alert("Thành Công");
            	location.reload();
            }
            else
            {
            	alert(msg);
            }
            
            
          },
          error: function () {
              alert("failure");
          }
      });
    });
  });

</script>