<script>
	            $( document ).ready(function(){
	document.getElementById("titreOnglet").innerHTML="<?php echo $lebillet["Titre"] ?>";
      		coverTrigger : false
      	});
</script>
  <div class="row">
    <div class="col s10 offset-s1">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center"><?php echo $lebillet["Titre"]; ?></span>
          <p><?php echo $lebillet["Contenu"]; ?></p>
                <?php 
           foreach($lesimages as $uneimage){
           	if($uneimage["Video"]==0){
           		$size=getimagesize($uneimage["chemin"]);
           		$hauteur=$size[0];
           		$largeur=$size[1];
         		if($largeur>$hauteur){
           		while($largeur>200){
           			$hauteur=$hauteur*0.9;
           			$largeur=$largeur*0.9;
           		}
           		}
           		else{
           			while($largeur>110){
           			$hauteur=$hauteur*0.9;
           			$largeur=$largeur*0.9;
           		}
           		}
           		$hauteurdeux=$size[0];
           		$largeurdeux=$size[1];
           		while($largeurdeux>540){
           			$hauteurdeux=$hauteurdeux*0.9;
           			$largeurdeux=$largeurdeux*0.9;
           		}
           
           ?>
           	<img class="hide-on-med-and-down"  width="<?php $hauteurdeux; ?>" height="<?php echo $largeurdeux; ?>" src="<?php echo $uneimage["chemin"]; ?>"></br>
          	<img class="hide-on-large-only"   width="<?php echo $hauteur; ?>" height="<?php echo $largeur; ?>" src="<?php echo $uneimage["chemin"]; ?>">
       <?php
           	}
           	else { ?>
		    <div class="video-container">
        <iframe width="560" height="315" src="<?php echo $uneimage["chemin"]; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
           	<?php
           	}
           }
       ?>

                <p><span style="text-decoration: underline;">Créer le</span>: <?php echo date_format(date_create($lebillet["Date"]),"d/m/Y"); ?></p>
        </div>

      </div>
    </div>
  </div>