var slides = document.querySelector('.slider_items').children;
var next_slide = document.querySelector('.right_slide');
var previous_slide = document.querySelector('.left_slide');
var total_slides = slides.length;
var index = 0

next_slide.onclick = function(){
    next("next");
}

previous_slide.onclick = function(){
    next("previous");
}

function next(direction){
    if(direction == "next"){
        index++;
        if(index == total_slides){
            index = 0;
        }
    }
    else{
        if(index == 0){
            index = total_slides - 1;
        }
        else{
            index--;
        }
    }

    for(i = 0; i<total_slides; i++){
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
}
