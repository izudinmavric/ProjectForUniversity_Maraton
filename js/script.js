//    ZA SLIDERRR

// var counter = 1;
// setInterval(function(){
//     document.getElementById('radio' + counter).checked =true;
//     counter++;
//     if(counter>4){
//         counter = 1;
//     }
// }, 4000);


//SLIDER

var i = 0;
var images = []
var time = 3000;

images[0] = '../images/maraton1.jpg'
images[1] = '/images/maraton2.jpg'
images[2] = './images/maraton3.jpg'
images[3] = 'images/maraton4.jpg'

function changeImg(){
    document.slide.src = images[i];
    if(i<images.length -1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()", time)
}

window.onload = changeImg;


// Za timer

const countdown = () => {
    const countDate = new Date('September 2, 2022 12:00').getTime()
    const nowTime = new Date().getTime();
    const razlika = countDate - nowTime;

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const textDay = Math.floor(razlika/day)
    const textHour = Math.floor((razlika % day) / hour)
    const textMinute = Math.floor((razlika % hour) / minute)
    const textSecond = Math.floor((razlika % minute) / second)

    document.querySelector(".day").innerHTML = textDay;
    document.querySelector(".hour").innerHTML = textHour;
    document.querySelector(".minute").innerHTML = textMinute;
    document.querySelector(".second").innerHTML = textSecond;


}

// Na svaku sekondu da se refresh
setInterval(countdown, 1000)

