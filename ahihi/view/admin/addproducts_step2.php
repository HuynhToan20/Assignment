<?php include "../view/admin/header_cpanel.php";?>
<div class="main_content">
    	<center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Thêm sản phẩm mới</h1></center>
        <br/><br/>
        <form action="../controller/administrator.php"  method="post" enctype="multipart/form-data">
            <input type="hidden"  name="action" value="addproducts_step3" action="addproducts_step3" />
        <center><table>
            <tr>
                <td><label for="LoaiMH">Chọn mặt hàng</label></td>
                <td align="left">
                    <?php
                    switch($product)
                    {
                        case "Quần":?>
                            <select name="LoaiMH" id="LoaiMH">
                            <option>Quần Nam</option>
                            <option>Quần Nữ</option>
                            <option>Quần Trẻ Em</option>
                            </select>
                        <?php break;
                       
                        case "Áo":?>
                            <select name="LoaiMH" id="LoaiMH">
                            <option>Áo</option>
                            <option>Áo Nữ</option>
                            <option>Áo Trẻ Em</option>
                            </select>
                        <?php break;
                        
                    }?>
                     
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LoaiBrand">Thương Hiệu</label></td>
                </td>
                <td align="left">
                    <select name="LoaiBrand" id="LoaiBrand">
                            <option>Adidas</option>   
                            <option>Nike</option>
                            <option>Puma</option>
                            <option>N&M</option>
                            <option>Converse</option>
                            <option>PT2000</option>
                            <option>Khác</option>
                            </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtTenSP">Tên sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtTenSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="file">Hình ảnh sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="file" name="file" id="file">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtGiaSP">Giá sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtGiaSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Mô tả sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtMotaSP" id="txtMotaSP" cols="40" rows="5"></textarea>
                 </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" value="Thêm sản phẩm mới" class="admin_submit_btn"/>
                <input type="reset"  value="Reset" class="admin_submit_btn"/></td>
            </tr>
        </table></center>
            <br/><br/>
        </form>
        <br/><br/><br/><br/>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../view/footer.php";?>

