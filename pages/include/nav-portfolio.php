<?php 

$goLeft = "";
$goRight = "";
$projetActuel = basename($_SERVER['PHP_SELF']); 

//var_dump($projetActuel);


$tabProjets = array('carrot.php', 'todolist.php', 'chocolat.php', 'conte-generator.php', 'cinema.php', 'cat-custom.php', 'graphisme-2.php', 'ontario.php', 'pinata.php', 'graphisme.php', 'agence.php', 'bbemg.php');
$firstProjet = $tabProjets[0];
$lastProjet = $tabProjets[count($tabProjets)-1];


for ($i=0; $i < count($tabProjets); $i++) { 
	if ($tabProjets[$i] == $projetActuel) {
		if ($i == 0) {
			$goLeft = $lastProjet; 
			$goRight = $tabProjets[$i+1];

		} 
		elseif ($i > 0 && $i < count($tabProjets)-1 ){
			$goLeft = $tabProjets[$i-1]; 
			$goRight = $tabProjets[$i+1];
		}
		elseif($i == count($tabProjets)-1 ){
			$goLeft = $tabProjets[$i-1]; 
			$goRight = $firstProjet;
		}
		
	} 
}

// var_dump($goLeft);
// var_dump($goRight);

?>

<nav class="navigation-top nav-portfolio">
	<div class="container">
		<ul>
			<li>
				<a href="<?php  echo $goLeft; ?>">
					<img src="../../img/motifsHome/arrow-w.png" class="ornement ormnt-right" alt="ornement">PROJET-Précédent
				</a>
			</li>
			<li>
				<a href="../../index.php#sect-Portfolio">
					<img src="../../img/motifsHome/pencil-w.png" class="ornement ormnt-left ormnt-pencil" alt="ornement">Retour au Portfolio	
					<img src="../../img/motifsHome/pencil-w.png" class="ornement ormnt-right ormnt-pencil" alt="ornement">
				</a>
			</li>
			<li>
				<a href="<?php  echo $goRight; ?>">
					PROJET-Suivant
					<img src="../../img/motifsHome/arrow-w.png" class="ornement ormnt-left" alt="ornement">
				</a>
			</li>
		</ul>
	</div>
</nav>
