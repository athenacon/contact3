var slider_img = document.querySelector('.slider-img');
var images = ['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg', 'e.jpg', 'f.jpg', 'g.jpg', 'h.jpg', 'i.jpg', 'k.jpg'];
var i = 0;

 
function next(){
    if(i === images.length - 3) {
        i++;

        const btn = document.getElementById("btn");

        btn.addEventListener("click", ()=>{

        if(btn.innerText === "Next"){
            btn.innerText = "Submit";
            return setImg();
        }
        });
        return setImg();
      }

    else if (i < images.length - 1){
        i++;
        return setImg();}
    else {
        alert("You are going to redirect to start the questionnaire.");
        window.location = 'questionnaire.php'; 
   }
	 			 
}

function setImg(){
	return slider_img.setAttribute('src', "imagess/"+images[i]);
	
}