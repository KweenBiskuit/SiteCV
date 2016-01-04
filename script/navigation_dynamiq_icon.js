$(function() {

	var aHome = $("nav ul li:nth-child(1) a img:first-child");
	var aHome1 = $("nav ul li:nth-child(1) a img:last-child");
	// console.log(aHome);
	var aSkills = $("nav ul li:nth-child(2) a img:first-child");
	var aSkills1 = $("nav ul li:nth-child(2) a img:last-child");

	var aPort = $("nav ul li:nth-child(3) a img:first-child");
	var aPort1 = $("nav ul li:nth-child(3) a img:last-child");

	var aCV = $("nav ul li:nth-child(4) a img:first-child");
	var aCV1 = $("nav ul li:nth-child(4) a img:last-child");

	var aContact = $("nav ul li:nth-child(5) a img:first-child");
	var aContact1 = $("nav ul li:nth-child(5) a img:last-child");


	var Home = $("#sect-Home");
	var Skills = $("#sect-Skills");
	var Port = $("#sect-Portfolio");
	var CV = $("#sect-CV");
	var Contact = $("#sect-Contact");

	var posHome = Home.offset().top;
	var posSkills = Skills.offset().top;
	var posPort = Port.offset().top;
	var posCV = CV.offset().top;
	var posContact = Contact.offset().top;

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		scroll+=200;
		// console.log("scroll: "+scroll);

		if (scroll>=posHome && scroll < posSkills) {
			// console.log("HOME");
			aHome.addClass("test");
			aHome1.addClass("test");
			aHome.parent().css("color", "#7CD4BB" );

		}
		else{
			aHome.removeClass("test");
			aHome1.removeClass("test");
			aHome.parent().css("color", "#fff" );
		}

		if (scroll >= posSkills && scroll < posPort) {
			// console.log("SKILLS");
			aSkills.addClass("test");
			aSkills1.addClass("test");
			aSkills1.parent().css("color", "#7CD4BB" );
		}
		else{
			aSkills.removeClass("test");
			aSkills1.removeClass("test");
			aSkills1.parent().css("color", "#fff" );
		}

		if (scroll >= posPort && scroll < posCV) {
			// console.log("PORTFOLIO");
			aPort.addClass("test");
			aPort1.addClass("test");
			aPort.parent().css("color", "#7CD4BB" );
		}else {
			aPort.removeClass("test");
			aPort1.removeClass("test");
			aPort.parent().css("color", "#fff" );
		}

		if (scroll >= posCV && scroll < posContact) {
			// console.log("CV");
			aCV.addClass("test");
			aCV1.addClass("test");
			aCV1.parent().css("color", "#7CD4BB" );

		}else {
			aCV.removeClass("test");
			aCV1.removeClass("test");
			aCV1.parent().css("color", "#fff" );
		}

		if (scroll >= posContact) {
			// console.log("Contact");
			aContact.addClass("test");
			aContact1.addClass("test");
			aContact1.parent().css("color", "#7CD4BB" );
		}else {
			aContact.removeClass("test");
			aContact1.removeClass("test");
			aContact1.parent().css("color", "#fff" );
		}

	});
	
});