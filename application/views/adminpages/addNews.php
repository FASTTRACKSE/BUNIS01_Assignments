<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      <table>
      	<tr>
			<textarea name="newsDesc" form="newsForm" placeholder="Enter news here . . ." required></textarea>	
		</tr>
		<form action="<?php echo(base_url());?>adminController/insertNews" method="POST" enctype="multipart/form-data" id="newsForm">
			<tr>
				<td>Title</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="text" name="title" required></td>
			</tr>
			<tr>
				<td>Type</td>

				<td> : </td>

				<td>
					<select style="height: 30px; width: 200px" name="type" required>
						<option value="promoprog">Promotion Program</option>
						<option value="techcons">Technical Consulting</option>
						<option value="autonews">Automotive News</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Post Date</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="date" name="postDate" readonly value="<?php echo date("Y-m-d");?>"></td>
			</tr>
			<tr>
				<td>News Picture</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="file" name="newsPicture" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Add"></td>
	</form>
				<form action="<?php echo(base_url());?>AdminController/news/">
					<td><input type="submit" name="" value="Back"></td>		
				</form>
			</tr>
	</table>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>