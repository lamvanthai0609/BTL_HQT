


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
                  if ($tinhtrang == "Notstarted") {
                    ?>
                      <option value="Notstarted" style="font-size: 13px;">Chưa bắt đầu</option>
                      <option value="Happenning" style="font-size: 13px;">Đang diễn ra</option>
                      <option value="Finished" style="font-size: 13px;">Đã kết thúc</option>
                    <?php
                  }
                  elseif($tinhtrang == "Happenning")
                  {
                    ?>
                      <option value="Happenning" style="font-size: 13px;">Đang diễn ra</option>
                      <option value="Notstarted" style="font-size: 13px;">Chưa bắt đầu</option>
                      <option value="Finished" style="font-size: 13px;">Đã kết thúc</option>
                    <?php
                  }
                  else{
                    ?>
                      <option value="Finished" style="font-size: 13px;">Đã kết thúc</option>
                      <option value="Happenning" style="font-size: 13px;">Đang diễn ra</option>
                      <option value="Notstarted" style="font-size: 13px;">Chưa bắt đầu</option>
                     
                    <?php
                  }
                ?>
                
            </select>
          </h4>
          <button id="themnv" style="float: right;" class="btn">Thêm Nhà Khuyến Mãi</button>
        </div>
        <div class="container" style="margin-bottom: 20px;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="valuesearch" style="margin-left: 20px;float: left;width: 60%;" type="text" class="form-control" placeholder="Nhập tên khuyến mãi" >
                <button id="searchkm" style="float: right;margin: 0px; margin-right: 20px;" class="btn">Tìm kiếm</button>
              </div>
            </div>
          </div>
        </div>
        <div style="max-height: 500px;overflow-y: auto;padding-bottom: 10px">
          <div class="card-body" style="">
            <div class="table-responsive">
              <table class="table" >
                <thead class=" text-primary">
                  <th> Mã KM </th>
                  <th> Tên KM </th>
                  <th> Giảm </th>
                  <th> TTT </th>
                  <th> Time BĐ </th>
                  <th> Time KT </th>
                  <th> SL </th>
                  <th class="text-right"> EDIT</th> 
                </thead>
                
                <tbody >

                  <?php
                  if (!empty($data)) 
                  {
                   
                    foreach ($data as $key) {

                      ?>
                      <tr>
                      
                        <td> <?php  echo $key['ma_km'] ?> </td>
                        <td> <?php  echo $key['ten_km'] ?> </td>
                        <td> <?php  echo $key['sotien_km'] ?> </td>
                        <td> <?php  echo $key['sotientoithieu'] ?> </td>
                        <td> <?php  echo $key['timestart'] ?> </td>
                        <td> <?php  echo $key['timeend'] ?> </td>
                        <td> <?php  echo $key['soluong'] ?> </td>
                        <td class="text-right"><button onclick="suattnv('<?php  echo $key['id_km'] ?>')" class="btn editnhanvien"><i class="fas fa-edit"></i> Edit</button></td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr style="text-align: center;">
                      <td style="text-align: center;" rowspan="10" colspan="8">Không tìm thấy khuyến mãi</td>
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

  function suattnv(id_km){
        $.post('Admin/control/QuanLyKhuyenMai/SuaKhuyenMai.php',{'id_km':id_km},function(data){
            $('#content').html(data);
        });
  }
  $(document).ready(function(){
      $('#themnv').click(function(){
        $.post('Admin/control/QuanLyKhuyenMai/ThemKhuyenMai.php',{},function(data){
            $('#content').html(data);
          });
      });
  });

  $(document).ready(function(){
    $('#changenv').change(function(){
      const data = $("#changenv").val();
      $.post('Admin/control/QuanLyKhuyenMai/DanhSachKhuyenMai.php',{tinhtrang:data},function(data){
        $('#content').html(data);
      });
    });
  })
  $(document).ready(function(){
    
    $('#searchkm').click(function(){
      const datasearch = $('#valuesearch').val();
      const data = $("#changenv").val();
      console.log(datasearch);
      console.log(data);
      

      $.post('Admin/control/QuanLyKhuyenMai/DanhSachKhuyenMai.php',{'datasearch':datasearch,'tinhtrangg':data},function(data){
    
        $('#content').html(data);
      });
    });
  })

  
</script>
