var button=document.getElementById("calc");
	button.onclick=function(){
		var x=document.getElementById("x").value;
		var y=document.getElementById("y").value;
		var colors=document.getElementById("colors").value;
		var result=document.getElementById("result");
		var pr=  (((x*y*colors)/8));
		if (pr>102400000){
			pr=(((((x*y*colors)/8)/1024)/1024)/1024).toString() + "Гб";
		} else if (pr>1024000&&pr<102400000){
			pr=((((x*y*colors)/8)/1024)/1024).toString() + "Мб";
		} else if (pr>1024&&pr<1024000){
			pr=((((x*y*colors)/8)/1024)).toString() + "Кб";
		} else {
			pr =pr.toString() + "байт";
		}
		result.value=pr;
	};

function validate(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);

function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}
