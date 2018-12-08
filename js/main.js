// JavaScript Document
(() => {

    function onLoad(){
        if(window.location.href.indexOf("about") > -1) {
            
        }else{
            const url = "admin/scripts/getWork.php";

            fetch(url) //access script
            .then(res => res.json())
            .then(data => {
                document.querySelector("#workPreview1").src = `images/${data[0].img}`;
                document.querySelector("#workPreview2").src = `images/${data[1].img}`;
                document.querySelector("#workPreview3").src = `images/${data[2].img}`;
                document.querySelector("#workPreview4").src = `images/${data[3].img}`;
                
                document.querySelector("#title1").innerHTML = data[0].title;
                document.querySelector("#desc1").innerHTML = data[0].description;
                document.querySelector("#workImg1").src = `images/${data[0].img}`;

                document.querySelector("#title2").innerHTML = data[1].title;
                document.querySelector("#desc2").innerHTML = data[1].description;
                document.querySelector("#workImg2").src = `images/${data[1].img}`;

                document.querySelector("#title3").innerHTML = data[2].title;
                document.querySelector("#desc3").innerHTML = data[2].description;
                document.querySelector("#workImg3").src = `images/${data[2].img}`;

                document.querySelector("#title4").innerHTML = data[3].title;
                document.querySelector("#desc4").innerHTML = data[3].description;
                document.querySelector("#workImg4").src = `images/${data[3].img}`;
            })
        }
    }

    function onLoad2(){
        if(window.location.href.indexOf("about") > -1) {
            const url = "admin/scripts/getAbout.php";

            fetch(url) //access script
            .then(res => res.json())
            .then(data => {
                document.querySelector("#drewPort1").src = `images/${data[0].img1}`;
                document.querySelector("#drewPort2").src = `images/${data[0].img2}`;
                document.querySelector("#drewPort3").src = `images/${data[0].img3}`;
                document.querySelector("#drewPort4").src = `images/${data[0].img4}`;

                document.querySelector("#aboutText").innerHTML = data[0].about_desc;
            })}
    }

    onLoad();
    onLoad2();

    //!!!!!!!!^^^^^DATABASE CONTENT SCRIPTS^^^^^!!!!!!!!!!
function indexLoad() {
    if(window.location.href.indexOf("about") > -1) {
            
    }else{
    // VARIABLE STACK
    let devWork = document.querySelector('.optL'),
        desWork = document.querySelector('.optR'),
        workArea = document.querySelector('.workArea'),
        vidArea = document.querySelector('.vidArea'),
        workPrev1 = document.querySelector('#workPreview1'),
        workPrev2 = document.querySelector('#workPreview2'),
        workPrev3 = document.querySelector('#workPreview3'),
        workPrev4 = document.querySelector('#workPreview4'),
        lightbox = document.querySelector('.lightbox'),
        lbImg = document.querySelector('#lbImg'),
        closeLB = document.querySelector('.closeLightbox'),
        body = document.querySelector('body'),
        devImg1 = document.querySelector("#workImg1"),
        devImg2 = document.querySelector("#workImg2"),
        devImg3 = document.querySelector("#workImg3"),
        devImg4 = document.querySelector("#workImg4");

    
    //FUNCTIONS
    function desSwap() {
        devWork.classList.remove('underLine');
        desWork.classList.add('underLine');

        workArea.classList.add('hidden');
        vidArea.classList.remove('hidden');        
    }

    function devSwap() {
        desWork.classList.remove('underLine');
        devWork.classList.add('underLine');

        vidArea.classList.add('hidden');
        workArea.classList.remove('hidden');  
    }



    function lbOpen1() {
        lightbox.classList.add('showLightbox');
        lbImg.src = "images/pureVolume_preview.png";
        body.classList.add('scrollStop');
    }
    function lbOpen2() {
        lightbox.classList.add('showLightbox');
        lbImg.src = "images/mind_over_melody_preview.png";
        body.classList.add('scrollStop');
    }
    function lbOpen3() {
        lightbox.classList.add('showLightbox');
        lbImg.src = "images/starship_troopers_preview.png";
        body.classList.add('scrollStop');
    }
    function lbOpen4() {
        lightbox.classList.add('showLightbox');
        lbImg.src = "images/st_infographic_preview.png";
        body.classList.add('scrollStop');
    }


    function lbClose(){
        lightbox.classList.remove('showLightbox');
        body.classList.remove('scrollStop');
    }



    //EVENT HANDLING
    devWork.addEventListener("click", devSwap);
    desWork.addEventListener("click", desSwap);
    workPrev1.addEventListener("click", lbOpen1);
    workPrev2.addEventListener("click", lbOpen2);
    workPrev3.addEventListener("click", lbOpen3);
    workPrev4.addEventListener("click", lbOpen4);
    devImg1.addEventListener("click", lbOpen1);
    devImg2.addEventListener("click", lbOpen2);
    devImg3.addEventListener("click", lbOpen3);
    devImg4.addEventListener("click", lbOpen4);

    closeLB.addEventListener("click", lbClose);
    document.addEventListener("keyup", function(event) {
        if (event.code == 'Escape') {
            lbClose();
        }
    });
    }
}

indexLoad();

})();
