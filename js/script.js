//==================== aumenta/diminui fonte ==============================//

function fonte(e){
    var body = $("#body");
    var fonteBody = body.css('font-size');

    var lead = $(".lead");
    var fonteLead = lead.css('font-size');

    var display4 = $(".display-4");
    var fonteDisplay4 = display4.css('font-size');

    var h2 = $(".h2");
    var fonteH2 = h2.css('font-size');
    
	if (e == 'a') {
		body.css("fontSize", parseInt(fonteBody) + 1);
		lead.css("fontSize", parseInt(fonteLead) + 1);
		display4.css("fontSize", parseInt(fonteDisplay4) + 1);
		h2.css("fontSize", parseInt(fonteH2) + 1);

	} else if('d'){
		body.css("fontSize", parseInt(fonteBody) - 1);
        lead.css("fontSize", parseInt(fonteLead) - 1);
        display4.css("fontSize", parseInt(fonteDisplay4) - 1);
        h2.css("fontSize", parseInt(fonteH2) - 1);
	}
}

//==================== troca palheta ==============================//

document.addEventListener('DOMContentLoaded', () => {
    const html = document.querySelector('body')
    const inputDarkMode = document.getElementById('input-dark-mode')
				
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            html.setAttribute("dark", "true")
        }else{
            html.removeAttribute("dark")
        }
    })
})

//==================== salva palheta ==============================//

document.addEventListener('DOMContentLoaded', () => {
    const darkModeStorage = localStorage.getItem('dark-mode')
    const html = document.querySelector('body')
    const inputDarkMode = document.getElementById('input-dark-mode')

    if(darkModeStorage){
        html.setAttribute("dark", "true")
        inputDarkMode.setAttribute("checked", "true")
    }

    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            html.setAttribute("dark", "true")
            localStorage.setItem('dark-mode', true)
        }else{
            html.removeAttribute("dark")
            
            localStorage.removeItem('dark-mode')
        }
    })
})