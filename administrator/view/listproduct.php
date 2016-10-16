<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span10">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Product</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Mã Sản Phẩm</th>
								  <th>Tên Sản Phẩm</th>
                                                                  <th>Hình Ảnh</th>
								  <th>Loại sản phẩm</th>
								  <th>Giá</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php 
                                                        foreach ($result as $row_sanpham) {
                                                            
                                                        
                                                      ?>
							<tr>
								<td><?=$row_sanpham['product_id'];?></td>
								<td class="center"><?=$row_sanpham['product_name'];?></td>
								<td class="center"><?=$row_sanpham['product_name'];?></td>
								<td class="center">
                                                                    <span class="label label-success"><?php switch ($row_sanpham['category_id']){
                                                                         case 1:echo 'Dien Thoai'; break;
                                                                             case 2:echo 'Tablet';break;
                                                                                 case 3:echo 'Laptop';break;
                                                                    }
                                                                                                                
                                                                    ?></span>
								</td>
                                                                <td><?=$row_sanpham['price'];?> VND</td>
								<td class="center">
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
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
			