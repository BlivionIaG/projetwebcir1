$(document).ready(function(){ 
var $carrousel = $('.sliderdiv'), // on cible le bloc du carrousel
    $img = $('.sliderdiv img'), // on cible les images contenues dans le carrousel
    indexImg = $img.length - 1, // on définit l'index du dernier élément
    i = 0, // on initialise un compteur
    $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)


$('div.next').click(function(){ // image suivante

    i++; 
    $img.css('display', 'none'); // on cache les images
    if( i > indexImg ){
        i = 0;
    }
    $currentImg = $img.eq(i);
    $currentImg.css('display', 'block');

});

$('div.previous').click(function(){ // image précédente

    i--; 
    $img.css('display', 'none');
    if( i < 0 ){
        i = indexImg;
    }
    $currentImg = $img.eq(i);
    $currentImg.css('display', 'block');

});

function slideImg(){
    setTimeout(function(){ // on utilise une fonction anonyme

        if(i < indexImg){ // si le compteur est inférieur au dernier index
	    i++; // on l'incrémente
	}
	else{ // sinon, on le remet à 0 (première image)
	    i = 0;
	}

	$img.css('display', 'none');
	$currentImg = $img.eq(i);
	$currentImg.css('display', 'block');

	slideImg(); // on oublie pas de relancer la fonction à la fin

    }, 7000); // on définit l'intervalle à 7000 millisecondes (7s)
}

slideImg(); // enfin, on lance la fonction une première fois

});

