	document.addEventListener("DOMContentLoaded", function() {

				// Functie om een willekeurig element uit een array te kiezen
				function getRandomElement(arr) {
					return arr[Math.floor(Math.random() * arr.length)];
				}

				// Willekeurige woorden
				var randomHoek = ["awesome", "cool", "scary", "fantastisch", "stinky", "cold"];
				var randomWords = ["normal", "slow", "aggressive", "calm", "in silence", "cold"];
				var randomLicht = ["daylight", "moonlight", "flashlight"];
				var randomGevoel = ["hated", "adored"];

				// Elementen selecteren en inhoud toewijzen
				document.getElementById("hoek").innerHTML = getRandomElement(randomHoek);
				document.getElementById("snelheid").innerHTML = getRandomElement(randomWords);
				document.getElementById("licht").innerHTML = getRandomElement(randomLicht);
				document.getElementById("gevoel").innerHTML = getRandomElement(randomGevoel);

				// Willekeurige kleuren toewijzen
				var randomColors = ["red", "green", "blue", "orange", "purple", "yellow"];
				var randomWordElements = document.getElementsByClassName("random-word");
				for (var i = 0; i < randomWordElements.length; i++) {
					randomWordElements[i].style.color = getRandomElement(randomColors);
				}

				// Willekeurige afbeelding
				var randomImage = ["images/papier3.png", "images/papier2.png", "images/papier.png"];
				var chosenImage = Math.floor(Math.random() * randomImage.length);
				document.querySelector(".tekstje").style.backgroundImage = "url(" + randomImage[chosenImage] + ")";

				// Knop functionaliteit
				document.getElementById("toonVerhaal").addEventListener("click", function() {
					console.log('Toon verhaal');
					document.getElementById("formulier").classList.add("verborgen");
					document.getElementById("transparant").classList.remove("onzichtbaar");
					document.getElementById("doorschijnend").classList.add("onzichtbaar");
					document.getElementById("verhaal").classList.remove("verborgen");
					document.getElementById("name").innerHTML = document.getElementById("naamTextfield").value;
					document.getElementById("number").innerHTML = Math.floor(Math.random() * 10);
					let checkbox1Checked = document.getElementById('combo1').checked
					let checkbox1Value = document.getElementById('combo1').value
					console.log(checkbox1Value)

					let checkbox2Checked = document.getElementById('combo2').checked
					let checkbox2Value = document.getElementById('combo2').value
					let newVal = "";

					if (checkbox1Checked && !(checkbox2Checked)) {
						newVal += checkbox1Value
					} else if (!(checkbox1Checked) && checkbox2Checked) {
						newVal += checkbox2Value
					} else if (checkbox1Checked && checkbox2Checked) {
						newVal += checkbox1Value + " and the " + checkbox2Value
					}
					document.getElementById("chosenBox").innerHTML=newVal

				
	

					let enemyName = document.querySelector('input[name="enemy"]:checked').value;
					console.log('enemyName:', enemyName);

					document.getElementById("enemy").innerHTML = enemyName
					console.log(enemyName)

				});

});
