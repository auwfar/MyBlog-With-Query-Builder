				<section id="sidebar">
					<?php
						if (isset($data_artikel_ID['id_author'])) {
							?>
							<div class="module">
						        <h3 class="module-title">
						            Author
						        </h3>
						        <div class="module-content">
						        	<?php
						        		$data_author = $author->SELECT_BY_ID($data_artikel_ID['id_author']);
						        	?>
						        	<div class="module-profile">
							        	<img src="assets/img/<?php echo $data_author['foto']; ?>" alt="">
							        	<div class="module-profile-content">
								            <h3><?php echo $data_author['nama']; ?></h3>
								            <p>
								                <?php echo $data_author['deskripsi']; ?>
								            </p>
							        	</div>
						        	</div>
						        </div>
						    </div>
							<?php
						}
					?>

				    <div class="module">
				        <h3 class="module-title">
				            Latest News
				        </h3>
				        <div class="module-content">
				        	<?php
				        		$data_news = $artikel->SELECT_NEWS();
				        	?>
				            <ul>
				            	<?php
				            	foreach ($data_news as $value) {
				            		?>
						                <li><a href="content.php?id=<?php echo $value['id_artikel']; ?>"><?php echo $value['judul_artikel']; ?></a></li>
				            		<?php
				            	}
				            	?>
				            </ul>
				        </div>
				    </div>

				    <div class="module">
				    	<?php 
				    		$data_popular = $artikel->SELECT_POPULAR();
				    	?>

				        <h3 class="module-title">
				            Popular News
				        </h3>
				        <div class="module-content">
				        	<a href="content.php?id=<?php echo $data_popular['id_artikel']; ?>">
					        	<div class="module-popular">
						        	<img src="assets/img/<?php echo $data_popular['gambar_artikel']; ?>" alt="">
						        	<div class="module-popular-content">
							            <h3><?php echo $data_popular['judul_artikel']; ?></h3>
							            <p>
							                <?php echo substr($data_popular['isi_artikel'], 0, 180) .'...'; ?>
							            </p>
						        	</div>
					        	</div>
				        	</a>
				        </div>
				    </div>
				</section>
				<div class="clearfix"></div>