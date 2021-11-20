


<div class="panel-header panel-header-sm">
</div>
<div class="content" style="">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header" style="height: 80px;">
          <h4 style="float: left;" class="card-title">
            <select id="changenv" class="form-control" style="border: 0px;">
                <?php
                  if ($display == "block") {
                    ?>
                      <option value="block" style="font-size: 13px;">Đang Sử Dụng</option>
                      <option value="none" style="font-size: 13px;">Đóng Băng</option>
                    <?php
                  }
                  else
                  {
                    ?>
                      <option value="none" style="font-size: 13px;">Đóng Băng</option>
                      <option value="block" style="font-size: 13px;">Đang Sử Dụng</option>
                    <?php
                  }
                ?>
                
            </select>
          </h4>
        </div>
        <div class="container" style="margin-bottom: 20px;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="valuesearch" style="margin-left: 20px;float: left;width: 60%;" type="text" class="form-control" placeholder="Nhập tên khách hàng" >
                <button id="searchnv" style="float: right;margin: 0px; margin-right: 20px;" class="btn">Tìm kiếm</button>
              </div>
            </div>
          </div>
        </div>
        <div style="max-height: 500px;overflow-y: auto;padding-bottom: 10px">
          <div class="card-body" style="">
            <div class="table-responsive">
              <table class="table" >
                <thead class=" text-primary">
                  <th> ID </th>
                  <th> Name </th>
                  <th> DATE </th>
                  <th> SEX </th>
                  <th> Email </th>
                  <th> SDT </th>
                  <th> DiaChi </th>
                  <th class="text-right"> EDIT</th> 
                </thead>
                
                <tbody >

                  <?php
                  if (!empty($data)) 
                  {
                   
                    foreach ($data as $key) {

                      ?>
                      <tr>
                        <td> <?php  echo $key['id_kh'] ?> </td>
                        <td> <?php  echo $key['ten_kh'] ?> </td>
                        <td> <?php  echo $key['ngaysinh_kh'] ?> </td>
                        <td> <?php  echo $key['gioitinh_kh'] ?> </td>
                        <td> <?php  echo $key['Email_kh'] ?> </td>
                        <td> <?php  echo $key['SDT_kh'] ?> </td>
                        <td> <?php  echo $key['diachi_kh'] ?> </td>
                        <td class="text-right"><button id="<?php  echo $key['id_kh'] ?>" class="btn editnhanvien"><i class="fas fa-edit"></i><?php if($display=="block"){ echo " Đóng Băng";}else{echo "Mở Đóng Băng";} ?></button></td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr style="text-align: center;">
                      <td style="text-align: center;" rowspan="10" colspan="8">Không tìm thấy tên khách hàng</td>
                    </tr>

                    <?php
                  }
                  ?>
                    
                 
                </tbody>
                
              </table>
            </div>
          </div>
         </div>
        <div style="height: 10px;"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">


  $(document).ready(function(){
    $('td button.btn').click(function(){
      if (confirm("Bạn có muốn thay đổi trạng thái tài khoản này không?")) {
        const id = $(this).attr('id');
        const data = $("#changenv").val();
        $.post('Admin/control/QuanLyKhachHang/QuanLyKhachHang.php',{id_kh:id,displayid:data},function(data){
          
          alert(data);
          location.reload();
        });
      }
    });
  });
  


  $(document).ready(function(){
    $('#changenv').change(function(){
      const data = $("#changenv").val();
      $.post('Admin/control/QuanLyKhachHang/QuanLyKhachHang.php',{display:data},function(data){
        $('#content').html(data);
      });
    });
  })


  $(document).ready(function(){
    $('#searchnv').click(function(){
      const datasearch = $('#valuesearch').val();
      const data = $("#changenv").val();
      $.post('Admin/control/QuanLyKhachHang/QuanLyKhachHang.php',{datasearch:datasearch,displaysl:data},function(data){
        $('#content').html(data);
      });
    });
  })
</script>
