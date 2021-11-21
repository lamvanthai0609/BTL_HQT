




<div class="panel-header panel-header-sm">
</div>
<div class="content" style="">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 style="float: left;" class="card-title"> Quản Lý Nhân Viên</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
           <table class="table" >
                <thead class=" text-primary">
                  <th> ID </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th> SDT </th>
                  <th> DiaChi </th>
                  <
                  <th class="text-right"> EDIT</th> 
                </thead>
                
                <tbody >

                  <?php
                  if (!empty($data)) 
                  {
                   
                    foreach ($data as $key) {

                      ?>
                      <tr>
                        <td> <?php  echo $key['id_ncc'] ?> </td>
                        <td> <?php  echo $key['ten_ncc'] ?> </td>
                        <td> <?php  echo $key['Email_ncc'] ?> </td>
                        <td> <?php  echo $key['SDT_ncc'] ?> </td>
                        <td> <?php  echo $key['diachi_ncc'] ?> </td>
          
                        <td class="text-right"><button onclick="xoa('<?php  echo $key['id_ncc'] ?>')" class="btn editnhanvien"><i class="fas fa-edit"></i> Xóa</button></td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr style="text-align: center;">
                      <td style="text-align: center;" rowspan="10" colspan="8">Không tìm thấy tên nhà cung cấp</td>
                    </tr>

                    <?php
                  }
                  ?>
                  
                 
                </tbody>
                
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function xoa(id)
  {
    if (confirm("Bạn có muốn xóa nhà cung cấp dùng với id là " + id)) {
      $.ajax({
        type:"POST",
        url:"Admin/model/QuanLyNhaCungCap/XoaNhaCungCap.php",
        data:{

          functionname:"xoancc",
          id: id
        },
        success: function(result){
          alert(result);
          location.reload();
        },
        erro: function(req){
          alert(req);
        }
      });
    }  
  }
  
</script>