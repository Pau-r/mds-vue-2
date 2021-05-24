buttonType1 = document.getElementById("webdesign");
	  buttonType2 = document.getElementById("graphisme");
	  buttonType3 = document.getElementById("photographie");
	  buttonType4 = document.getElementById("videos");
	  buttonType5 = document.getElementById("alternance");
	  buttonAllProjects = document.getElementById("all-projects");
	  allButtons = document.getElementsByClassName("filtre-projets");

	  function filterProjects(button, type) {
	  	for(b of allButtons) {
	  		b.classList.remove("active");
	  	}
	  	button.classList.add("active");

	  	var allProjects = document.getElementsByClassName("show");
	  	var projectsOfType = document.getElementsByClassName(type);
	  	var projectsToHide = [];
	  	for(element of allProjects) {
	  		projectsToHide.push(element);
	  	}
	  	projectsToHide.forEach(function (element) {
	  		element.classList.remove("show");
	  	});
	  	for(element of projectsOfType) {
	  		element.classList.add("show");
	  	}
	  }

	  buttonType1.addEventListener("click", function() {
	  	filterProjects(buttonType1, "webdesign");
	  });

	  buttonType2.addEventListener("click", function() {
	  	filterProjects(buttonType2, "graphisme");
	  });

	  buttonType3.addEventListener("click", function() {
	  	filterProjects(buttonType3, "photographie");
	  });

	  buttonType4.addEventListener("click", function() {
	  	filterProjects(buttonType3, "videos");
	  });

	  buttonType5.addEventListener("click", function() {
	  	filterProjects(buttonType3, "alternance");
	  });

	  buttonAllProjects.addEventListener("click", function () {
	  	for(b of allButtons) {
	  		b.classList.remove("active");
	  	}
	  	buttonAllProjects.classList.add("active");

	  	var allProjects = document.getElementsByClassName("flip-card");
	  	for(project of allProjects) {
	  		if(!project.classList.contains("show")) {
	  			project.classList.add("show");
	  		}
	  	}
	  });