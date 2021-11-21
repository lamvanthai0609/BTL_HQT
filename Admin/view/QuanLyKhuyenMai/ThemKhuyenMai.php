


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
          <h5 class="title">Thêm Khuyến Mãi</h5>
        </div>
        <div class="card-body"> 
          <!-- Admin/model/QuanLyNhanVien/ThemNhanVien.php -->
          <form class="themnv" >
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Mã Khuyến Mãi</label>
                  <input type="text" value="" class="form-control" id="ma_km" name="ma_km" placeholder="Mã Khuyến Mãi" >
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="form-group">
                  <label>Số Tiền</label>
                  <input type="text" class="form-control" placeholder="Số Tiền Giảm" id="sotien_km" name="sotien_km" required="required">
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-group">
                  <label for="exampleInputEmail1">Giá Đơn Hàng Tối Thiểu</label>
                  <input type="text" class="form-control" placeholder="Giá Đơn Hàng Tối Thiểu" id="sotientoithieu" name="sotientoithieu" required="required">
                </div>
              </div>
            </div>

        



            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tên Khuyến Mãi</label>
                  <input type="text" class="form-control" placeholder="Tên Khuyến Mãi" id="ten_km" name="ten_km" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Thời Gian Bắt Đầu</label>
                  <input type="datetime-local" class="form-control datetime"  id="batdautime" name="batdautime" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Thời Gian Kết Thúc</label>
                  <input type="datetime-local" class="form-control datetime"  id="timeend" name="timeend" required="required">
                </div>
              </div>
            </div>
            
           
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Số Lượng</label>
                  <input type="number" class="form-control" min="0"  id="soluong" name="soluong" required="required">
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
	
		
  $(document).ready(function (){
    $("button#submit").click(function(){
      if ($("#ma_km").val() == "") {alert("Bạn chưa nhập mã km"); return false;$("#ma_km").focus();}
      if ($("#sotien_km").val() == "") {alert("Bạn chưa nhập số tiền km"); return false;$("#sotien_km").focus();}
      if ($("#sotientoithieu").val() == "") { alert("Bạn chưa nhập số tiền tối thiểu"); return false;$("#sotientoithieu").focus();}
      if ($("#ten_km").val() =="") {alert("Bạn chưa nhập tên km");return false;$("#ten_km").focus();}
      if ($("#batdautime").val() == "") { alert("Bạn chưa nhập thời gian bắt đầu"); return false;$("#batdautime").focus();}
      if ($("#timeend").val() =="") {alert("Bạn chưa nhập thời gian kết thúc");return false;$("#timeend").focus();}
      if ($("#soluong").val() =="" ||  $("#soluong").val()<0) {alert("Bạn chưa nhập số lượng hoặc số lượng của ban < 0");return false;$("#soluong").focus();}
      const date = new Date();

      const datestringmoi = date.getFullYear()  + "-" + (date.getMonth()+1) + "-" + date.getDate() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
      // console.log($("#batdautime").val());
      // console.log(Date.parse($("#batdautime").val()));
      // console.log(Date.parse($("#timeend").val()));
      // console.log(Date.parse(datestringmoi));
      if (Date.parse($("#batdautime").val()) < Date.parse($("#timeend").val())) {
        if (Date.parse($("#batdautime").val()) > Date.parse(datestringmoi)) {
            $.ajax({
                type: "POST",
                url: "Admin/model/QuanLyKhuyenMai/ThemKhuyenMai.php", //
                data: $('form.themnv').serialize(),
                success: function (msg) {
                  alert(msg);
                  if (msg == "Thành Công") location.reload();
        
                },
                error: function () {
                    alert("failure");
                }
            });
        }
        else
        {
          alert('Thời gian bắt đầu phải lớn hơn thời gian hiện tại');
        }
      }
      else
      {
        alert("Thời gian kết thúc không thể nhỏ hơn thời gian bắt đầu");
      }
      
    });
  });


  // setInterval(function(){ 
  //   var date = new Date();

  //   var datestringmoi = date.getFullYear()  + "-" + (date.getMonth()+1) + "-" + date.getDate() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
  //   console.log(datestringmoi);
  //   $("input[type='datetime-local']").attr({"min":datestringmoi});
  // },1000);

</script>