<div id="datVe" class="container-fluid book">

	
	
	<form class="form-inline" role="form" align="center">
		<div class="col-sm-4">
		<div class="form-group">
                    <input style="text-align: center;" class="form-control" id="nguoilon" name="nguoilon" type="text" value="Nhập số vé" onblur="if(this.value == '') { this.value='Nhập số vé'}" onfocus="if (this.value=='Nhập số vé') this.value='';"/>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="form-group">
			<select class="form-control" id="loaive">
				<option>Chọn ngày đặt vé</option>
				<option value="nt">Ngày thường</option>
				<option value="nl">Ngày lễ và chủ nhật</option>
			</select>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="form-group">
			<button type="button" class="btn btn-primary" onclick="change_page();">Đặt Vé</button>
		
		</div>
		</div>
	
<script>
  function change_page()
                  {
                                var is_error=0;
                                var loaive = document.getElementById('loaive');

                                if(loaive.selectedIndex!=0)
                        {
                                var form_object = document.createElement('form');
                                var input_object_1 = document.createElement('input');
                                var input_object_2 = document.createElement('input');
                                var input_object_3 = document.createElement('input');
                                var nguoilon = parseInt(document.getElementById('nguoilon').value);


                                if(nguoilon>0){
                                                                input_object_1.type='text'; input_object_1.value=nguoilon;
                                                                        input_object_1.name='nguoilon';form_object.appendChild(input_object_1);
                                              }
                                else {  
                                    alert('Bạn vui lòng chọn số vé cần đặt');
                                    is_error=1;
                                }




                                if(is_error==0)
                                {
                                input_object_3.type='text';

                                input_object_3.value=loaive.value;

                                input_object_3.name='loaive';

                                 form_object.method='post';
                                 form_object.action='dangky_dangnhap_.php';


                                 form_object.appendChild(input_object_3);
                                 form_object.submit();
                                }
                        } else {
                            alert('Bạn vui lòng chọn ngày tham quan');
                        }
          }
</script>		

	</form>
	
	
</div>

