<?php	                 
while($row=mysqli_fetch_array($run))	
					{
							if ($id > 2) {
								break;
							
							}
							?>

		                   <div class="row" style="border-radius: 10px;">
									<div class="panel panel-default" style="border-radius: 5px;opacity: 0.7;background-color: white">
									  <div class="panel-heading" style="border-radius: 5px;background-color: white">
									    <span class="panel-title" >
									    		<span style="height:50px;overflow: hidden;font-color:black"><?php echo $row['name']; ?></span>
									  
									    </span>
									  </div>
									  <div class="panel-body" >
									  	 	<span><?php echo $row['date']; ?> </span>
									  </div>
									    </div>
									  <div class="panel-body" >
									  	 	<span><?php echo $row['date']; ?> </span>
									  </div>
									 
									</div>
									<?php 
						}
						echo "</div>";
					?>