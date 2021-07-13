<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/CategoryControll.php'; ?>
<?php $categories = getAllCategories(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>All Categories</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					
				</thead>
				<tboady>
				    <?php
                        $i = 1;
						foreach($categories as $c){
							<tr>;
							    <td><?php echo $i ?></td>;
								<td><?php echo $c["cname"] ?></td>;
								<td> <?php <a href="EditCategory.php? id'=.$c["id"]'"?>>Edit</td>;
							</tr>;
							$i++;
						}
					?>
				</tboady>
			</table>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>