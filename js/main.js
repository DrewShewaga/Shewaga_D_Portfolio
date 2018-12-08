// JavaScript Document
(() => {

    function onLoad(){

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

    function onLoad2(){

        const url = "admin/scripts/getAbout.php";

        fetch(url) //access script
        .then(res => res.json())
        .then(data => {
            document.querySelector("#drewPort1").src = `images/${data[0].img1}`;
            document.querySelector("#drewPort2").src = `images/${data[0].img2}`;
            document.querySelector("#drewPort3").src = `images/${data[0].img3}`;
            document.querySelector("#drewPort4").src = `images/${data[0].img4}`;

            document.querySelector("#aboutText").innerHTML = data[0].about_desc;
        })

    }

    onLoad();
    onLoad2();

})();
