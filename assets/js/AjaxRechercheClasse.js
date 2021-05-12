


		function getFind() {
					var m = document.getElementById("idclasse").value;
					var url ="../../Controllers/Classe/FonctionRechercheClasse.php?idclasse="+m;
					var	xhr = new XMLHttpRequest();
					xhr.open("GET",url,true);
					xhr.send();
					xhr.onreadystatechange = function (){
														if ( xhr.readyState === 4 && xhr.status === 200 ){
														document.getElementById("result").innerHTML = xhr.responseText ;}
					}
			};