// Fonction de désactivation de l'affichage des "tooltips"
    function deactivateTooltips() {
    	var tooltips = document.querySelectorAll('.tooltip'),
    	tooltipsLength = tooltips.length;
    	
    	for (var i = 0 ; i < tooltipsLength ; i++) {
    		tooltips[i].style.display = 'none';
    	}
	}

// La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input
	function getTooltip(elements) {
	    while (elements = elements.previousElementSibling.lastElementChild) {
	    	if (elements.className === 'tooltip') {
	    		return elements;
	    	}
	    }
	    return false;
    }

// Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok
    var check = {}; // On met toutes nos fonctions dans un objet littéral

    check['nom'] = function(){
    	var nom = document.querySelector('input[name=nom]');
    	var tooltipStyle = getTooltip(nom).style;
    	// console.log(nom.previousElementSibling.lastElementChild);
    	if (nom.value.length >= 3) {
    		tooltipStyle.display = 'none';
    		nom.style.border = '2px solid #46C7A2';
    		return true;
    	} else {
    		tooltipStyle.display = 'inline-block';
    		nom.style.border = '2px dashed #46C7A2';
    		return false;
    	}
    };

    check['mail'] = function(){
    	var mail = document.querySelector('input[name=mail]');
    	var tooltipStyle = getTooltip(mail).style;

		var regMail = new RegExp("^[a-z0-9.\\-_]{2,}@[a-z0-9.-_]{2,}\\.[a-z]{2,4}$");
		var mailValide = regMail.test(mail.value);

    	if (mailValide) {
    		tooltipStyle.display = 'none';
    		mail.style.border = '2px solid #46C7A2';
    		return true;
    	} else {
    		tooltipStyle.display = 'inline-block';
    		mail.style.border = '2px dashed #46C7A2';
    		return false;
    	}
    };

    check['message'] = function(){
    	var message = document.querySelector('textarea[name=message]');
    	var tooltipStyle = getTooltip(message).style;
    	console.log(tooltipStyle);

    	if (message.value.length > 0) {
    		tooltipStyle.display = 'none';
    		message.style.border = '2px solid #46C7A2';
    		return true;
    	} else {
    		tooltipStyle.display = 'inline-block';
    		message.style.border = '2px dashed #46C7A2';
    		return false;
    	}
    };

//Mise en place des évènements : 

(function(){
	var myForm = document.getElementById('formContact');
	var inputs = document.querySelectorAll('input[type=text], input[type=mail], textarea[name=message]');
	var inputsLength = inputs.length;
    var btnSubmit = document.querySelector("#btnSubmit");
    console.log("bouton ENVOYE" + btnSubmit);
	console.log('longueur :' + inputsLength);

	for (var i = 0; i < inputsLength; i++) {
		inputs[i].addEventListener('keyup', function(e){
			check[e.target.name](e.target.name);
		}, false);
	};

	btnSubmit.addEventListener('click', function(e){
		var result = true;

        console.log("\n----------------------");
		for(var i in check){

            console.log("check = " + i + " / result = " + result );
			result = check[i](i) && result;
            console.log("result maintenant = " + result);
		}

		if (result) {
			myForm.submit();
            console.log("LE FORMULAIRE EST ENVOYE !");
		};

		e.preventDefault();
	}, false);

	myForm.addEventListener('reset', function(){
		for (var i = 0; i < inputsLength; i++) {
			inputs[i].className = '';
		}

		deactivateTooltips();
	}, false);

})();

deactivateTooltips();
