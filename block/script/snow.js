window.onresize = function() { 
window.location = ""; 
} 


var imgsrc="http://www.stickpng.com/assets/thumbs/580b585b2edbce24c47b2dad.png"; 
var ie4=(document.all)?1:0; 
var ns6=(document.getElementById&&!document.all)?1:0; 
var height=(document.layers)?window.innerHeight:window.document.body.scrollHeight; 
var width=(document.layers)?window.innerWidth:window.document.body.clientWidth; 


var col=10;    
var k=0
rot=new Array();
amp=new Array(); 
x_pos=new Array(); 
y_pos=new Array(); 
stx=new Array(); 
sty=new Array(); 
deltax=new Array(); 
obj=new Array(); 
size=new Array(); 

for (i=0; i<col; ++i) { 
 amp[i]=Math.random()*19; 
 x_pos[i]=Math.random()*(width-100); 
 y_pos[i]=Math.random()*height-125; 

 stx[i]=0.1+Math.random()*0.5; 
 sty[i]=Math.random()*10; 
 deltax[i]=1; 
 size[i]=50+Math.random()*100; 
 rot[i]=Math.random()*360;

 
 if (ie4||ns6) { 
    document.write("<img id=\"sn"+ i +"\" style=\"position:absolute;" + 
    "z-index:"+ i +"; width:"+ size[i] +"; height:"+ size[i] +"; visibility:visible; top:100%; left:100%;\"" + 
    "src='"+imgsrc+"' border=0>"); 
 } 
 obj[i] = document.getElementById("sn"+i);
 obj[i].style.width=size[i]+"px";
    obj[i].style.height=size[i]+"px";
} 

function flake() { 

 for (i=0; i<col; ++i) { 
    obj[i] = document.getElementById("sn"+i); 
    y_pos[i]+=sty[i]; 
    if (y_pos[i]>height-100) { 
        x_pos[i]=Math.random()*(width-amp[i]-0); 
        y_pos[i]=0; 

    }     
    obj[i].style.transform="rotate("+rot[i]+"deg)";
    obj[i].style.webkitTransform="rotate("+rot[i]+"deg)";
    obj[i].style.msTransform="rotate("+rot[i]+"deg)";
    obj[i].style.MozTransform="rotate("+rot[i]+"deg)";
    obj[i].style.OTransform="rotate("+rot[i]+"deg)";

    rot[i]=Math.sin(deltax[i]+45)*10+90;
    deltax[i]+=stx[i]; 
    obj[i].style.top=y_pos[i]+"px"; 
    obj[i].style.left=x_pos[i]+amp[i]*Math.sin(deltax[i]+45)+"px"; 
 } 
setTimeout("flake()", 60); 
} 
flake(); 
snow1();