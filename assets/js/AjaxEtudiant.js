		
		
		function Verifier(){
			
			var m = document.getElementById("mat").value;
			var url ="../../Controllers/Etudiant/VerfierMatricule.php?matricule="+m;
			var	xhr = new XMLHttpRequest();
			xhr.open("GET",url,true);
			xhr.send();
			xhr.onreadystatechange = function (){
												if ( xhr.readyState === 4 && xhr.status === 200 ){
												document.getElementById("refStat").innerHTML = xhr.responseText ;}
			}
		};
		
		
													
	 