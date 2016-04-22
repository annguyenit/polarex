<div id="datVe" class="container-fluid book">
    <form action="dangky_dangnhap_.php" method="post" class="form-inline" role="form" align="center">
        <div class="col-sm-4">
            <div class="form-group">
                <input style="text-align: center;" class="form-control" id="nguoilon" name="nguoilon" type="text" value="Nhập số vé" onblur="if (this.value == '') {
                            this.value = 'Nhập số vé'
                        }" onfocus="if (this.value == 'Nhập số vé')
                                    this.value = '';"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <select class="form-control" id="loaive" name="loaive">
                    <option value="">Chọn ngày đặt vé</option>
                    <option value="nt">Ngày thường</option>
                    <option value="nl">Ngày lễ và chủ nhật</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" id="btnDatVe" class="btn btn-primary"">Đặt Vé</button>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#btnDatVe").click(function () {
                    var loaive = $('#loaive');
                    var nguoilon = $('#nguoilon');

                    if (loaive.val() == '') {
                        alert('Bạn vui lòng chọn ngày tham quan');
                        return false;
                    }

                    if (!$.isNumeric(nguoilon.val()) || nguoilon.val() <= 0) {
                        alert('Bạn vui lòng chọn số vé cần đặt');
                        return false;
                    }
                });
            });
        </script>		
    </form>
</div>

