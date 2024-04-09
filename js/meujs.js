//js navbar
document.addEventListener("DOMContentLoaded", function() {
    const ger = document.getElementsByClassName("navbar-brand")[0];
	const log = document.getElementsByClassName("navbar-brand")[1];
    const gerOriginal = ger.innerHTML;
    const logOriginal = log.innerHTML;
	
	//Gerenciamento Apple
    function OnMouseOverGer() {  
        ger.innerHTML = "<i class=\"fa-brands fa-apple fa-beat\"></i> Gerenciamento Apple"; 
		ger.style.color = "#666666";
    }

    function OnMouseOutGer() {
        ger.innerHTML = gerOriginal;
		ger.style.color = "#000000";	
    }

    ger.onmouseover = OnMouseOverGer;
    ger.onmouseout = OnMouseOutGer;

	//Cadastro
	
	function OnMouseOverLog() {  
        log.innerHTML = "<i class=\"fa-solid fa-address-card fa-beat\"></i> Cadastro"; 
		log.style.color = "#666666";
    }

    function OnMouseOutLog() {
        log.innerHTML = logOriginal;
		log.style.color = "#000000";
    }

    log.onmouseover = OnMouseOverLog;
    log.onmouseout = OnMouseOutLog;
	
})
//js form
function removeDefaultOption() {
    let selectElement = document.getElementById("selectDepto");
    
	if (selectElement.value === "") {
        selectElement.removeChild(selectElement.options[0]);
    }
}
