<div class="panel-header panel-header-sm">
</div>
<div class="content" style="">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header" style="height: 80px;">
          <h4 style="float: left;" class="card-title">
            <select class="form-control" style="border: 0px;">
                <option style="font-size: 13px;">Nhân Viên Đang Làm</option>
                <option style="font-size: 13px;">Nhân Viên Đã Nghỉ</option>
            </select>
          </h4>
          <button id="themnv" style="float: right;" class="btn">Thêm nhân viên</button>
        </div>
        <div class="container" style="margin-bottom: 20px;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input style="margin-left: 20px;float: left;width: 60%;" type="text" class="form-control" placeholder="Nhập tên nhân viên" >
                <button style="float: right;margin: 0px; margin-right: 20px;" class="btn">Tìm kiếm</button>
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
                  for ($i=0; $i < 5; $i++) { 
                    ?>
                    <tr>
                      <td> 1 </td>
                      <td> Dakota Rice</td>
                      <td> 20/10/2000 </td>
                      <td> Nam </td>
                      <td> lamvanthai0609@gmail.com </td>
                      <td> 0963326948 </td>
                      <td> NV Kho </td>
                      <td class="text-right"><button class="btn editnhanvien"><i class="fas fa-edit"></i> Edit</button></td>
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
      $('.editnhanvien').click(function(){
        $.post('qlnhanvien/suanv.php',{},function(data){
            $('#content').html(data);
        });
      });
    });
  $(document).ready(function(){
      $('#themnv').click(function(){
        $.post('qlnhanvien/themnv.php',{},function(data){
            $('#content').html(data);
        });
      });
    });
</script>
<!--  <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->