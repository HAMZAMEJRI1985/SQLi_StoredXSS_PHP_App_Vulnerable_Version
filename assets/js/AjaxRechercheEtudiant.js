


		function getFind() {
					var m = document.getElementById("mat").value;
					var url ="../../Controllers/Etudiant/FonctionRechercheEtudiant.php?matricule="+m;
					var	xhr = new XMLHttpRequest();
					xhr.open("GET",url,true);
					xhr.send();
					xhr.onreadystatechange = function (){
														if ( xhr.readyState === 4 && xhr.status === 200 ){
														document.getElementById("result").innerHTML = xhr.responseText ;}
					}
			};