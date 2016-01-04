	var iconSkills = document.querySelectorAll('.skills-cat');
	console.log(iconSkills);

	function iconSkillsHover(element){
		var source = element.firstElementChild.firstElementChild.src;
		newSource = source.slice(0,-4) + "-hover.png";
		element.firstElementChild.firstElementChild.src = newSource;
		element.firstElementChild.lastElementChild.style.color = "#79d8c7";
		element.lastElementChild.style.color = "#79d8c7";
	}

	function iconSkillsOut(element){
		var source = element.firstElementChild.firstElementChild.src;
		newSource = source.slice(0,-10) + ".png"
		element.firstElementChild.firstElementChild.src = newSource;
		// element.firstElementChild.lastElementChild.style.color = "#000";
		element.lastElementChild.style.color = "#000";
	}

	for (var i = 0; i < iconSkills.length; i++) {
		iconSkills[i].addEventListener('mouseover', function(e){
			iconSkillsHover(e.currentTarget);
		}, false);
	};

	for (var i = 0; i < iconSkills.length; i++) {
		iconSkills[i].addEventListener('mouseout', function(e){
			iconSkillsOut(e.currentTarget);
		}, false);
	};