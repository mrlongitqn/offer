<div id="content" class="span12">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Order</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Order</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Mã Order</th>
                                                                  <th>Thông Tin Order</th>
                                                                  <th>Thông Tin Khác Hàng</th>
								  <th>Ngày Mua</th>
								  <th>Tổng Giá</th>
								  <th>Tình Trạng</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <tr>
								  <td></td>
                                                                  <td>
                                                                      <table>
                                                                            <tr>
                                                                                <th>Tên Sản Phẩm</th> 
                                                                                <th>Số lượng</th>
                                                                                <th>Đơn Giá</th>
                                                                                <th>Thành Tiền</th>
                                                                            </tr>
                                                                      </table>
                                                                  </td>
								  <td></td>
								  <td></td>
								  <td></td>
                                                                  <td></td>
							  </tr>
                                                        <?php 
                                                            foreach ($order as $row_order) {
                                                                $order_id=$row_order['order_id'];
                                                                $order_detail= OrderDetailList($order_id);
                                                        ?>
                                                        <tr>
								  <td><?=$row_order['order_id']?></td>
                                                                  <td>
                                                                      <?php 
                                                                        foreach ($order_detail as $row_order_detail) {
                                                                            $product_id=$row_order_detail['product_id'];
                                                                            $name= SanPhamOrder($product_id)
                                                                      ?>
                                                                      <table>
                                                                            <tr>
                                                                                <td><?=$name['product_name'];?></td> 
                                                                                <td><?=$row_order_detail['sale_quantity']?></td>
                                                                                <td><?=$row_order_detail['price']?></td>
                                                                                <td><?=$row_order_detail['sale_quantity']*$row_order_detail['price']?></td>
                                                                            </tr>
                                                                      </table>
                                                                      <?php 
                                                                      
                                                                            }
                                                                      ?>
                                                                      
                                                                  </td>
                                                                  <td>
                                                                      <p>Tên Khách Hàng: <?=$row_order['customer_name']?> </p>
                                                                      <p>Số Điện Thoại: <?=$row_order['customer_phone']?></p>
                                                                      <p>Địa Chỉ: <?=$row_order['customer_address']?></p>
                                                                      <p>Email: <?=$row_order['customer_email']?></p>
                                                                  </td>
								  <td><?=$row_order['create_date']?></td>
								  <td><?=$row_order['total_price']?></td>
                                                                  <td><?php $row_order['status']?></td>
							  </tr>
                                                          <?php 
                                                          
                                                                }
                                                          
                                                          ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

	</div><!--/.fluid-container-->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->
			