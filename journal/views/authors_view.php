<section class="pt-5 pb-5" >
    <div class="container ">
    	<h1 align="center">Список авторов нашего сайта</h1>
        <div class="row">
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
								<?php
								 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
								 	if($row_no == 3){
								 		break;
								 	}
								 $data->data_seek($row_no);
								 $row = $data->fetch_assoc();
								 echo
									 "
										<div class=\"col-md-4 mb-3\">
										    <div class=\"card\">
										        <div class=\"card-body\">
										            <h4 class=\card-title\">".$row['fio']."</h4>
										            <p class=\"card-text\"><p>Возраст: ".$row['age']."</p>
																			 <p>Местонахождение: ".$row['location']."</p>
																			 <p>Дополнительно: ".$row['additional']."</p>"."</p>
																			 <p><a href='/journal/about/author/?id=".$row['id']."'target='_blank'>Подробнее</a></p>
										        </div>
						    				</div>
										</div>
									 ";
								 } 
								 ?>
                            </div>
                        </div>

                        <?php 
                        
						for ($block_no = 1; $block_no <= ($data->num_rows - $row_no + 1) / 3; $block_no++) {
							echo 
							"
								<div class=\"carousel-item\">
                            		<div class=\"row\">
							";

							 for (; $row_no <= $data->num_rows - 1; $row_no++) {
							 	if($row_no + 1 / 3 == 0){
							 		break;
							 	}
							 $data->data_seek($row_no);
							 $row = $data->fetch_assoc();
							 echo
								 "
									<div class=\"col-md-4 mb-3\">
									    <div class=\"card\">
									        <div class=\"card-body\">
									            <h4 class=\card-title\">".$row['fio']."</h4>
									            <p class=\"card-text\"><p>Возраст: ".$row['age']."</p>
																		 <p>Местонахождение: ".$row['location']."</p>
																		 <p>Дополнительно: ".$row['additional']."</p>"."</p>
																		 <p><a href='/journal/about/author/?id=".$row['id']."'target='_blank'>Подробнее</a></p>
									        </div>
						    			</div>
									</div>
								 ";
							 } 
								 
							echo 
							"
								 	</div>
                        		</div>
							";
						}
                        ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 