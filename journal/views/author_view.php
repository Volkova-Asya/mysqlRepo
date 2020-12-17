<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        	<h1>Информация об авторе нашего сайта</h1>
        	<?php
				 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
				 $data->data_seek($row_no);
				 $row = $data->fetch_assoc();
				 echo
					 "
						    <div class=\"card\">
						        <div class=\"card-body\">
						            <h4 class=\card-title\">".$row['fio']."</h4>
						            <p class=\"card-text\"><p>Возраст: ".$row['age']."</p>
															 <p>Местонахождение: ".$row['location']."</p>
															 <p>Дополнительно: ".$row['additional']."</p>"."</p>
						        </div>
						    </div>
					 ";
				 } 
			 ?>
        </div>
    </div>
</div>