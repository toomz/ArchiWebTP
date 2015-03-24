function addToCart(poke_id, poke_nom, poke_prix) {
	$.ajax({
		url : 'panier.php',
		type : 'POST',
		data : { action : "ajout", poke_id : poke_id, poke_nom : poke_nom, poke_prix : poke_prix },
		dataType : 'html',
		success : function(code_html, statut) {
		   // $(code_html).appendTo("#commentaires"); // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
		   alert("Pokemon ajouté");
		},

		error : function(resultat, statut, erreur) {
		 	alert("Pokemon PAS ajouté");
		},

		complete : function(resultat, statut) {

		}

	});
    
//    alert("Dans AddToCart()");
}