<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<style>
	i {color:#dd0000;padding-right:5px;}
	h4 {font-weight:600;color:#dd0000;}
	a:hover {text-decoration:none;}

	.card{box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    	  transition: 0.3s;
    	  width: 100%;
    	  border-radius: 0px;}

	.card:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
	.card-block {padding:15px;}
	.card-img {border-radius: 0px 0px 0 0;max-height:180px;overflow: hidden;}

	.out-border {border:1px solid #e2e2e2;border-radius:10px 10px;}
	</style>
</head>
<body>
<!-- 		<div class = "test_table">
		<table class = "bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Tag</th>
			</tr>
		<?php
			foreach($getDataByID as $data){
		?>	
				<tr>
					<td><?php echo $data['ID']; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['description']; ?></td>

					<td><?php echo $data['tag']; ?></td>
				</tr>
		<?php
			}
		?>
		</table>
	</div> -->


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<div class="container">
	<div class="row">
        <div style="margin-bottom: 100px;" class="col-md-4">
            <div class="card">

                <div class="card-img ">
                    <a><img class="card-img-top " height="400" width="400" src="<?php echo  base_url('assets/img/').$data['picture'] ;?>"></a>
                </div>
                <div class="card-block">

                <div class="card-title">
                    <h4><?php echo  $data['name']  ;?></h4>
                </div>

                <div class="card-text">
                    <p><?php echo   $data['description'] ;?></p>
                </div>

                <hr>

           		<div class="card-footer">
                
                <ul class="list-inline">
                    <li><a></i><?php echo   $data['tag'] ;?></a></li>
                </ul>

            	</div>

                </div>
            </div>
        </div>
	</div>
</div>
        <!-- <div class="col-lg-4 col-md-6 mb-4 ">
          <div class="card h-100">
            <a><img class="card-img-top " height="400" width="400" src="<?php echo  base_url('assets/img/').$data['picture'] ;?>"></a>
            <div class="card-body">
            <h4 class="card-title">
            <a href="#"><?php echo  $data['name']  ;?></a>
            </h4>
            <h5><?php echo  $data['tag']  ;?></h5>
           	<p class="card-text"><?php echo   $data['description'] ;?></p> 
   		</div>
    </div> -->
</body>
</html>