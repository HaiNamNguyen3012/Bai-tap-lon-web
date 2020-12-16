#views/createpost/createpost.php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="dangtin.css">
    <title>Thông tin về phòng cần cho thuê</title>
</head>

<body>
    <div class="main">
        <section class="dangtin">
            <div class="container">
                <div class="dangtin-content">
                    <form action="" method="post" id="formchothuephong" class="formchothuephong">
                        <h1>Thông tin về phòng cần cho thuê</h1>

                        <!-- địa chỉ -->

                        <div class="form-group">
                            <label for="dia_chi" id="lb-diachi">Địa chỉ phòng thuê<sup2>*</sup2></label> <br>
                            <input type="text" name="dia_chi" class="form-input" id="diachi" placeholder="Địa chỉ(Số nhà - Tên đường)" require>
                            <select name="thanh_pho" id="thanh-pho" class="form-input" require>
                                <option  style="display:none" disabled selected value>Tỉnh/Thành phố</option>
                                <option value="01">Hà Nội</option>
                            </select>
                            <select name="quan_huyen" id="quan" class="form-input" require>
                                <option  style="display:none" disabled selected value>Quận Huyện</option>
                                <option value="001">Ba Đình</option>
                                <option value="021">Bắc Từ Liêm</option>
                                <option value="250">Mê Linh</option>
                                

                            </select>
                            <select name="xa_phuong" id="phuong" class="form-input" require>
                                <option  style="display:none" disabled selected value>Phường Xã</option>
                                <option value="00001">Phúc Xá</option>
                                <option value="00004">Trúc Bạch</option>
                                <option value="00006">Vĩnh Phúc</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="gan_dia_diem" >Gần các địa điểm:</label>
                            <br/>
                            <input type="text" name="gan_dia_diem"  class="form-input" placeholder="Gần các địa điểm">
                            <!-- <p id="unit">m2</p> -->
                        </div>

                        <!-- Loại phòng -->

                        <div class="form-group">
                            <label for="loai_phong" id="lb-loaiphong">Loại phòng cho thuê</label>
                            <br>
                            <select name="loai_phong" id="loaiphong" class="form-input">
                                <option  style="display:none" disabled selected value>Loại phòng bạn cho thuê là......</option>
                                
                                <option value="phongtro">Phòng trọ</option>
                                <option value="chungcumini">Chung cư mini</option>
                                <option value="nhanguyencan">Nhà nguyên căn</option>
                                <option value="chungcunguyencan">Chung cư nguyên căn</option>
                            </select>
                            <input type="number" name="so_luong_phong" id="soluong" class="form-input" placeholder="số lượng phòng" min="1" max="99">
                        </div>

                        <!-- giá cả -->

                        <div class="form-group">
                            <label for="gia" id="lb-price">Giá cả<sup2>*</sup2></label>
                            <br>
                            <input type="text" name="gia" id="price" class="form-input" placeholder="Giá cả">
                            <select name="tinh_theo" id="price-time" class="form-input">
                                <option  style="display:none" disabled selected value>Giá tính theo.....</option>
                                <option value="thang">Tháng</option>
                                <option value="quy">Quý</option>
                                <option value="nhanguyencan">Năm</option>
                            </select>
                        </div>

                        <!-- Diện tích -->

                        <div class="form-group">
                            <label for="dien_tich" id="lb-dientich">Diện tích<sup2>*</sup2></label>
                            <br/>
                            <input type="text" name="dien_tich" id="dientich" class="form-input" placeholder="Diện tích">m2
                            <!-- <p id="unit">m2</p> -->
                            
                        </div>


                        <div class="form-group">
                            <label for="tieu_de" >Tiêu đề<sup2>*</sup2></label>
                            <br/>
                            <input type="text" name="tieu_de"  class="form-input" placeholder="Tiêu đề">
                    
                        </div>
                        <div class="form-group">
                            <label for="noi_dung" >Nội dung<sup2>*</sup2></label>
                            <br/>
                            <input type="text" name="noi_dung"  class="form-input" placeholder="Nội dung">
                    
                        </div>

                        <!-- chung với chủ -->

                        <div  class="form-group">
                            <h4 class="chung-chu-hay-khong">Chung với chủ<sup2>*</sup2></h4>
                            <br/>
                            <input type="radio" id="chung_chu1" name="chung_chu" value="1">
                            <label for="chung_chu1" id="lb-chung-chu">Chung</label>
                            <input type="radio" id="chung_chu2" name="chung_chu" value="0">
                            <label for="chung_chu2" id="lb-khong-chung">Không chung</label>
                        </div>

                        <!-- Điều kiện vật chất -->

                        <div class="form-group">
                            <h2 class="dieu-kien-vat-chat">điều kiện vật chất</h2>

                            <!-- Phòng tắm -->
                            <div class="dieu-kien-vat-chat-radio">
                                <h4 class="phongtam">Phòng tắm<sup2>*</sup2></h4>
                                <br/>
                                <input type="radio" id="phong_tam_chung1" name="phong_tam_chung" value="1">
                                <label for="phong_tam_chung1" id="lb-chung-phong-tam">Chung</label>
                                <input type="radio" id="phong_tam_chung2" name="phong_tam_chung" value="0">
                                <label for="phong_tam_chung2" id="lb-khep-kin">Khép kín</label>
                            </div>

                            <div class="dieu-kien-vat-chat-radio">
                                <h4 class="phongtam">Nóng lạnh<sup2>*</sup2></h4>
                                <br/>
                                <input type="radio" id="nong_lanh1" name="nong_lanh" value="1">
                                <label for="nong_lanh1" id="lb-chung-phong-tam">Có</label>
                                <input type="radio" id="nong_lanh2" name="nong_lanh" value="0">
                                <label for="nong_lanh2" id="lb-khep-kin">Không</label>
                            </div>

                            <!-- Bếp -->
                            <div class="dieu-kien-vat-chat-radio">
                                <h4 class="bep">Bếp<sup2>*</sup2></h4>
                                <input type="radio" id="phong_bep1" name="phong_bep" value="2">
                                <label for="phong_bep1" id="lb-chung-khu-bep">Chung nhà bếp</label>
                                <input type="radio" id="phong_bep2" name="phong_bep" value="1">
                                <label for="phong_bep2" id="lb-rieng-khu-bep">Khu bếp riêng</label>
                                <input type="radio" id="phong_bep2" name="phong_bep" value="0">
                                <label for="phong_bep3" id="lb-khong-nau-an">Không nấu ăn</label>
                            </div>


                            <!-- Điều hòa -->
                            <div class="dieu-kien-vat-chat-radio">
                                <h4 class="dieu-hoa">Điều hòa<sup2>*</sup2></h4>
                                <input type="radio" id="dieu_hoa1" name="dieu_hoa" value="1">
                                <label for="dieu_hoa1" id="lb-co-dieu-hoa">Có điều hòa</label>
                                <input type="radio" id="dieu_hoa2" name="dieu_hoa" value="0">
                                <label for="dieu_hoa2" id="lb-khong-dieu-hoa">Không có điều hòa</label>
                            </div>


                            <!-- Ban công -->
                            <div class="dieu-kien-vat-chat-radio">
                                <h4 class="ban-cong">Ban công<sup2>*</sup2></h4>
                                <input type="radio" id="ban_cong1" name="ban_cong" value="1">
                                <label for="ban_cong1" id="lb-co-ban-cong">Có ban công</label>
                                <input type="radio" id="ban_cong2" name="ban_cong" value="0">
                                <label for="ban_cong2" id="lb-khong-ban-cong">Không có ban công</label>
                            </div>

                            <div class="form-group">
                            <label for="dien_nuoc" >Giá điện nước<sup2>*</sup2></label>
                            <br/>
                            <input type="text" name="dien_nuoc"  class="form-input" placeholder="Tính theo giá dân /4 nghìn một số điện">
                    
                        </div>

                            <!-- Tiện ích khác -->
                            <h4 class="other">Tiện ích khác</h4>
                            <input type="checkbox" id="tu-lanh" name="tu_lanh" value="1">
                            <label for="tu-lanh" id="lb-tu-lanh"> Tủ lạnh </label>
                            <input type="checkbox" id="may-giat" name="may_giat" value="1">
                            <label for="may-giat" id="lb-may-giat"> Máy giặt </label>
                            <input type="checkbox" id="giuong-tu" name="giuong_tu" value="1">
                            <label for="giuong-tu" id="lb-giuong-tu"> Giường tủ </label>

                            <!-- Ảnh -->
                            
                            <label for="cac_anh[]">Chọn ảnh (tối thiểu 3 ảnh): <sup2>*</sup2></label>
                            <input type="file" id="files" name="cac_anh[]" multiple/>
                            <output id='result' >   
                                

                            
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Đăng tin"/>

                        </div>
                    </form>



                    
      
                    <?php var_dump($_POST);?>
                </div>
            </div>
        </section>
    </div>
    
    <script src="dangtin.js"></script>
</body>

</html>
###views/createpost/createpost.php

