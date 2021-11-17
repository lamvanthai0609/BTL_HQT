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
        <form>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Id Nhân viên </label>
                <input type="text" class="form-control" disabled="" placeholder="Company" >
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="form-group">
                <label>SDT</label>
                <input type="text" class="form-control" placeholder="SDT">
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
          </div>
         
          <div class="row">
          	<div class="col-md-4 col-12">
          		<div class="form-group">
	                <label for="img_file">Ảnh</label>
	                <input onclick="hienanh()" type="file" id="img_file" class="form-control" style= "display: none;">
	                <img id="img" src="" width="100px" height="100px;" style="margin-top: 30px;margin-left: 30px;">
	              </div>
          	</div>
          	<div class="col-md-8 col-12">
          		<div class="row">
          			<div class="col-md-12">
          				<div class="form-group">
			                <label>First Name</label>
			                <input type="text" class="form-control" placeholder="First Name" >
			             </div>
          			</div>
          		</div>
          		<div class="row">
          			<div class="col-md-12">
          				<div class="form-group">
			                <label>Last Name</label>
			                <input type="text" class="form-control" placeholder="Last Name" >
			             
			            </div>
          			</div>
          		</div>
          	</div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" class="form-control" placeholder="Địa Chỉ" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 ">
              <div class="form-group">
                <label>Ngày Sinh</label>
                <input type="datetime-local" class="form-control"  >
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">
                <label>Giới Tính</label>
                <select class="form-control" >
                	<option>Nam</option>
                	<option>Nữ</option>
                </select>
                <!-- <input type="text" class="form-control" > -->
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">
                <label>Chức Vụ</label>
                <select class="form-control" >
                	<option>NV Kho</option>
                	<option>NV Cửa Hàng</option>
                </select>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tình trạng</label>
                <select class="form-control" >
                	<option>Đang Làm</option>
                	<option>Đã Nghỉ</option>
                </select>
              </div>
            </div>
          </div>
          <button class="btn">Thay Đổi</button>
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>About Me</label>
                <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
              </div>
            </div>
          </div> -->
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-user">
      <div class="image">
        <img src="../assets/img/bg5.jpg" alt="...">
      </div>
      <div class="card-body">
        <div class="author">
          <a href="#">
            <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
            <h5 class="title">Lâm Văn Thái</h5>
          </a>
          <p class="description">
            Thái
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
</script>