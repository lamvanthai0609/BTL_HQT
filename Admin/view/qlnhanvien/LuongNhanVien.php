


<div class="panel-header panel-header-sm">
</div>
<div class="content" style="">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header" style="height: 80px;">
          <h4 style="float: left;" class="card-title">
           <!--  <select id="changenv" class="form-control" style="border: 0px;">
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
                
            </select> -->
          </h4>
        </div>
        <div class="container" style="margin-bottom: 20px;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="valuesearch" style="margin-left: 20px;float: left;width: 60%;" type="text" class="form-control" placeholder="Nhập tên nhân viên" >
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
                  <th> TongTime </th>
                  <th> TongXeng </th>
                  <th class="text-right"> XemThongTin</th> 
                </thead>
                
                <tbody >

                  <?php
                  if (!empty($data)) 
                  {
                   
                    foreach ($data as $key) {
                      $data_nv = select_one("SELECT * from nhanvien where id_nv = '".$key['id_nv']."'");

                      ?>
                      <tr>
                        <td> <?php  echo $key['id_nv'] ?> </td>
                        <td> <?php  echo $data_nv['ten_nv'] ?> </td>
                        <td> <?php  echo $data_nv['ngaysinh_nv'] ?> </td>
                        <td> <?php  echo $data_nv['gioitinh_nv'] ?> </td>
                        <td> <?php  echo $data_nv['Email_nv'] ?> </td>
                        <td> <?php  echo $key['tongtime'] ?> </td>
                        <td> <?php  echo number_format($key['tongtien']) ?> </td>
                        <td class="text-right"><button id="<?php  echo $key['id_nv'] ?>" class="btn editnhanvien"><i class="fas fa-edit"></i><?php echo "XemTT"; ?></button></td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr style="text-align: center;">
                      <td style="text-align: center;" rowspan="10" colspan="8">Không tìm thấy lương nhân viên</td>
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


        <div style="" class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="card-title"> Lương Nhân Viên Cần Xem</h4>
                  <p class="category"> Thông tin</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive" id="tabledatatt" style="max-height: 500px;overflow-y: auto;padding-bottom: 10px">
                    
                  </div>
                </div>
              </div>
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
        const id = $(this).attr('id');
        $.post('Admin/control/QuanLyNhanVien/LuongNhanVien.php',{id_nv:id},function(data){
          $('#tabledatatt').html(data);
        
        });
    });
  })
  


  // $(document).ready(function(){
  //   $('#changenv').change(function(){
  //     const data = $("#changenv").val();
  //     $.post('Admin/control/QuanLyNhanVien/LuongNhanVien.php',{:data},function(data){
  //       $('#content').html(data);
  //     });
  //   });
  // })


  $(document).ready(function(){
    $('#searchnv').click(function(){
      const datasearch = $('#valuesearch').val();
      $.post('Admin/control/QuanLyNhanVien/LuongNhanVien.php',{datasearch:datasearch},function(data){
        $('#content').html(data);
      });
    });
  })
</script>
