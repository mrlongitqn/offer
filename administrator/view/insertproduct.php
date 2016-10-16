
				
			<!-- start: Main Menu -->
			
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Elements</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên Sản Phẩm</label>
							  <div class="controls">
								<input type="text" class="span4 typeahead" id="typeahead"  data-provide="typeahead" data-items="1" >
								
							  </div>
							</div>
                                                        <div class="control-group">
								<label class="control-label" for="selectError3">Category</label>
								<div class="controls">
								  <select id="selectError3">
									<option>Điện Thoại</option>
									<option>Tablet</option>
									<option>Laptop</option>
								  </select>
								</div>
							</div>
                                                        <div class="control-group">
								<label class="control-label" for="selectError3">Nhà Sản Xuất</label>
								<div class="controls">
								  <select id="selectError3">
									<option>--Chon Nha San Xuat--</option>
                                                                        <?php 
                                                                            foreach ($nsx as $row_nsx) {
                                                                                
                                                                            
                                                                        ?>
                                                                        <option value="<?=$row_nsx['manufacturers_id']?>" ><?=$row_nsx['manufacturers_name']?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                  </select>
								</div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="typeahead">Giá Sản Phẩm</label>
							  <div class="controls">
								<input type="text" class="span4 typeahead" id="typeahead"  data-provide="typeahead" data-items="1" >
								
							  </div>
							</div>
                                                        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Mô Tả</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="fileInput">image 2</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="fileInput">image 3</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<!--/row-->
			
			

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	
	<!-- end: JavaScript-->
