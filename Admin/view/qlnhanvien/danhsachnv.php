


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
                      <option value="block" style="font-size: 13px;">Nhân Viên Đang Làm</option>
                      <option value="none" style="font-size: 13px;">Nhân Viên Đã Nghỉ</option>
                    <?php
                  }
                  else
                  {
                    ?>
                      <option value="none" style="font-size: 13px;">Nhân Viên Đã Nghỉ</option>
                      <option value="block" style="font-size: 13px;">Nhân Viên Đang Làm</option>
                    <?php
                  }
                ?>
                
            </select>
          </h4>
          <button id="themnv" style="float: right;" class="btn">Thêm nhân viên</button>
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
                  <th> SDT </th>
                  <th> CHUCVU </th>
                  <th class="text-right"> EDIT</th> 
                </thead>
                
                <tbody >

                  <?php
                  if (!empty($data)) 
                  {
                   
                    foreach ($data as $key) {

                      ?>
                      <tr>
                        <td> <?php  echo $key['id_nv'] ?> </td>
                        <td> <?php  echo $key['ten_nv'] ?> </td>
                        <td> <?php  echo $key['ngaysinh_nv'] ?> </td>
                        <td> <?php  echo $key['gioitinh_nv'] ?> </td>
                        <td> <?php  echo $key['Email_nv'] ?> </td>
                        <td> <?php  echo $key['SDT_nv'] ?> </td>
                        <td> <?php  echo $key['chucvu_nv'] ?> </td>
                        <td class="text-right"><button onclick="suattnv('<?php  echo $key['id_nv'] ?>')" class="btn editnhanvien"><i class="fas fa-edit"></i> Edit</button></td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr style="text-align: center;">
                      <td style="text-align: center;" rowspan="10" colspan="8">Không tìm thấy tên nhân viên</td>
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

  function suattnv(id_nv){
        $.post('Admin/control/QuanLyNhanVien/SuaNhanVien.php',{'id_nv':id_nv},function(data){
            $('#content').html(data);
        });
  }
  $(document).ready(function(){
      $('#themnv').click(function(){
        $.post('Admin/control/QuanLyNhanVien/ThemNhanVien.php',{},function(data){
            $('#content').html(data);
          });
      });
  });

  $(document).ready(function(){
    $('#changenv').change(function(){
      const data = $("#changenv").val();
      $.post('Admin/control/QuanLyNhanVien/QuanLyNhanVien.php',{display:data},function(data){
        $('#content').html(data);
      });
    });
  })
  $(document).ready(function(){
    $('#searchnv').click(function(){
      const datasearch = $('#valuesearch').val();
      $.post('Admin/control/QuanLyNhanVien/QuanLyNhanVien.php',{datasearch:datasearch},function(data){
        $('#content').html(data);
      });
    });
  })
</script>
