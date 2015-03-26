<?php 
	require_once("connexion_bdd.php");

	if(isset($_GET["type"]))
		$selected_type = $_GET["type"];
	else
		$selected_type = 1;

	$types = getTypes($bdd);

	$pokemons = getPokemonsByType($bdd, $selected_type);


	include_once('header.html');
?>

		<div class="breadcrumbs">
			HOME &nbsp; &#8594; &nbsp; HIS &nbsp; &#8594; &nbsp; <span class="breadcrumbs-selected">VULPUTATE ADIPISCING</span> 
		</div>

		<div>

			<div class="categories">
				<div class="categories-title">Shop By</div>
				<div class="categories-content">
					<div>Category</div>
					<div>
						<ul>
							<?php
								if ($types->num_rows > 0) {
								    while($row = $types->fetch_assoc()) {
								    	if($selected_type == $row["type_poke_id"])
									        echo "<li><a href='index.php?type=".$row["type_poke_id"]."' class='selected'> > ".$row["type_poke_libelle"]."</a></li>";
									    else
									        echo "<li><a href='index.php?type=".$row["type_poke_id"]."'>".$row["type_poke_libelle"]."</a></li>";
								    }
								} else {
								    echo "<li>Aucun type disponible</li>";
								}
							?>
						</ul>
					</div>
				</div>
			</div>

			<div class="thumbnails">
				<div class="thumbnails-title">
					<div>VULPUTATE ADIPISCING</div>
					<div>Hide Option &nbsp; &#8595;</div>
				</div>
				<div class="thumbnails-option">
					<div><img src="show_options.png" alt=""></div>
					<div>
						<span>Show</span> 
						<select><option>12 per pages</option></select> 
						<span class="span-sortBy">Sort By </span>
						<select><option>position</option></select> &#8593;
					</div>
				</div>
				
				<div class="footer-separator">
					<img src="package/img-export/footer-separator.png">
				</div>

				<div class="thumbnails-content">
                    <div class="thumbnails-row">

					<?php

						if ($pokemons->num_rows > 0) {

							$i=1;
						    while($row = $pokemons->fetch_assoc()) {

//								if($i==1 || $i==4 || $i==7)
//									echo '<div class="thumbnails-row">';

								echo '<div class="thumbnail">';
									echo '<div class="thumbnail-image"><img src="img/'.$row['poke_img'].'" alt=""></div>';

									echo '<div class="thumbnail-image-bottom"><img src="package/img-export/thumbnail_bottom.png"></div>';

									echo '<span class="item-title"><a href="#">'.$row['poke_nom'].'</a></span>';

									echo '<br><span class="item-price">$'.$row['poke_prix'].'</span>';

									echo '<div class="item-icons">';

										echo '<div class="item-icons-left">';
											echo '<button type="button" onclick="addToCart('.$row["poke_id"].',\''.$row["poke_nom"].'\', '.$row["poke_prix"].', \''.$row['poke_img'].'\');">ADD TO CART</button>';

										echo '</div>';

										echo '<div class="item-icons-right">';
											echo '<div><img src="package/img-export/2015---TP-WEB---IHM-export_26.png"></div>';
											echo '<div><img src="package/img-export/2015---TP-WEB---IHM-export_30.png"></div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';

//								if($i==3 || $i==6 || $i==9)
//									echo '</div>';

								$i++;
							}

						} else 
						    echo "Aucun type disponible";
						
					?></div></div></div></div><?php include_once('footer.html'); ?>
