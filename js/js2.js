$(window).on('touchmove', onScroll); // for mobile
$(window).on('scroll', onScroll);
$(document).on('ready', onScroll);

var values = [true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true];
var size = screen.height;
if(detectMobile()){
    size = screen.height;
    size = size * 2;
} else {
    size -= 200;
}


function onScroll() {
    if(values[0] && $(this).scrollTop()+size>=$('#demo').position().top){
        document.getElementById('demo').style.animationPlayState = "running";
        values[0] = false;
    }
    if(values[1] && $(this).scrollTop()+size>=$('#our_ser_img1').position().top){
        document.getElementById('our_ser_img1').style.animationPlayState = "running";
        values[1] = false;
    }
    if(values[2] && $(this).scrollTop()+size>=$('#our_ser_txt1').position().top){
        document.getElementById('our_ser_txt1').style.animationPlayState = "running";
        values[2] = false;
    }
    if(values[3] && $(this).scrollTop()+size>=$('#our_ser_img2').position().top){
        document.getElementById('our_ser_img2').style.animationPlayState = "running";
        values[3] = false;
    }
    if(values[4] && $(this).scrollTop()+size>=$('#our_ser_txt2').position().top){
        document.getElementById('our_ser_txt2').style.animationPlayState = "running"; 
        values[4] = false; 
      }
    if(values[5] && $(this).scrollTop()+size>=$('#our_ser_img3').position().top){
        document.getElementById('our_ser_img3').style.animationPlayState = "running";
        values[5] = false;
        }
    if(values[6] && $(this).scrollTop()+size>=$('#our_ser_txt3').position().top){
        document.getElementById('our_ser_txt3').style.animationPlayState = "running";
        values[6] = false;
    }
    if(values[7] && $(this).scrollTop()+size>=$('#our_ser_img4').position().top){
        document.getElementById('our_ser_img4').style.animationPlayState = "running";
        values[7] = false;
    }
    if(values[8] && $(this).scrollTop()+size>=$('#our_ser_txt4').position().top){
        document.getElementById('our_ser_txt4').style.animationPlayState = "running";
        values[8] = false;
    }
    if(values[9] && $(this).scrollTop()+size>=$('#our_ser_img5').position().top){
        document.getElementById('our_ser_img5').style.animationPlayState = "running";
        values[9] = false;
    }
    if(values[10] && $(this).scrollTop()+size>=$('#our_ser_txt5').position().top){
        document.getElementById('our_ser_txt5').style.animationPlayState = "running";
        values[10] = false;
    }
    if(values[11] && $(this).scrollTop()+size>=$('#our_ser_img6').position().top){
        document.getElementById('our_ser_img6').style.animationPlayState = "running";
        values[11] = false;
    }
    if(values[12] && $(this).scrollTop()+size>=$('#our_ser_img7').position().top){
        document.getElementById('our_ser_img7').style.animationPlayState = "running";
        values[12] = false;
    }
    if(values[13] && $(this).scrollTop()+size>=$('#heading1').position().top){
        document.getElementById('heading1').style.animationPlayState = "running";
        values[13] = false;
    }
    if(values[14] && $(this).scrollTop()+size>=$('#heading2').position().top){
        document.getElementById('heading2').style.animationPlayState = "running";
        values[14] = false;
    }
    if(values[15] && $(this).scrollTop()+size>=$('#heading3').position().top){
        document.getElementById('heading3').style.animationPlayState = "running";
        values[15] = false;
    }
    if(values[16] && $(this).scrollTop()+size>=$('#heading4').position().top){
        document.getElementById('heading4').style.animationPlayState = "running";
        values[16] = false;
    }
    if(values[17] && $(this).scrollTop()+size>=$('#heading5').position().top){
        document.getElementById('heading5').style.animationPlayState = "running";
        values[17] = false;
    }
    if(values[18] && $(this).scrollTop()+size>=$('#heading6').position().top){
        document.getElementById('heading6').style.animationPlayState = "running";
        values[18] = false;
    }
}

function detectMobile() {
    if(screen.width <= 1200) {
        return true;
    } else {
        return false;
    }
}