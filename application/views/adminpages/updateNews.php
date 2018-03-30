<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      <table>
      	<tr>
			<textarea name="newsDesc" form="newsForm" placeholder="Enter news here . . ." required><?php echo($news['newsDescription']) ?></textarea>	
		</tr>
		<form action="<?php echo(base_url());?>/index.php/adminController/updateNews/<?php echo($news['id']) ?>" method="POST" enctype="multipart/form-data" id="newsForm">
			<tr>
				<td>Title</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="text" name="title" value="<?php echo($news['title']) ?>" required></td>
			</tr>
			<tr>
				<td>Type</td>
				<td> : </td>

				<td>
					<select style="height: 30px; width: 200px" name="type" required>
						<?php if ($news['type'] == 'promoprog'): ?>
							<option selected value="promoprog">Promotion Program</option>
							<option value="techcons">Technical Consulting</option>
							<option value="autonews">Automotive News</option>

						<?php elseif($news['type'] == 'techcons'):  ?>
							<option value="promoprog">Promotion Program</option>
							<option selected value="techcons">Technical Consulting</option>
							<option value="autonews">Automotive News</option>

						<?php elseif($news['type'] == 'autonews'):  ?>
							<option value="promoprog">Promotion Program</option>
							<option selected value="techcons">Technical Consulting</option>
							<option selected value="autonews">Automotive News</option>
						<?php endif;?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Post Date</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="date" name="postDate" readonly value="<?php echo($news['postDate']) ?>"></td>
			</tr>
			<tr>
				<td>News Picture</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="file" name="newsPicture" required value="<?php echo($news['imageNews']) ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Update"></td>
	</form>
				<form action="<?php echo(base_url());?>index.php/AdminController/news/">
					<td><input type="submit" name="" value="Back"></td>		
				</form>
			</tr>
	</table>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>