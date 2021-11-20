




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
            <table class="table">
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
              <tbody>
                <?php
                foreach ($data as $key) 
                {
                  ?>
                    <tr>
                      <td> <?php  echo $key['id_nv'] ?> </td>
                      <td> <?php  echo $key['ten_nv'] ?> </td>
                      <td> <?php  echo $key['ngaysinh_nv'] ?> </td>
                      <td> <?php  echo $key['gioitinh_nv'] ?> </td>
                      <td> <?php  echo $key['Email_nv'] ?> </td>
                      <td> <?php  echo $key['SDT_nv'] ?> </td>
                      <td> <?php  echo $key['chucvu_nv'] ?> </td>
                      <td class="text-right"><button class="btn" onclick="xoa('<?php  echo $key['id_nv'] ?>')"><i class="fas fa-trash-alt"></i> Xóa</button></td>
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
    if (confirm("Bạn có muốn xóa người dùng với id là " + id)) {
      $.ajax({
        type:"POST",
        url:"Admin/model/QuanLyNhanVien/XoaNhanVien.php",
        data:{

          functionname:"xoanv",
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