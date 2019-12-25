nav = document.getElementById("nav")


function Shade(){

    window.onscroll=function(){
        if(window.pageYOffset>350){

            nav.style.background="purple";
            ;
        }

        else{
            nav.style.background="transparent";
        }
    };}

    function yuhuy() {
    var sma = document.getElementById("SMA");
    var gbr1 = document.getElementById("Gbr1");
    var btn1 = document.getElementById("Btn1");
    var bt1 = document.getElementById("Bt1");
    var par = document.getElementsByClassName("Par");
    var s = document.getElementById("Parq");
    bt1.addEventListener("click", function (e)/*Harus Di inget*/ {
        gbr1.setAttribute("style", "display:block");
        btn1.setAttribute("style", "display:Btn1");
        bt1.setAttribute("style", "display:none");
        par.setAttribute("style", "display:none");
        s.setAttribute("style","display:none");
    });

    btn1.addEventListener("click", function (e) {
        gbr1.setAttribute("style", "display:none");
        btn1.setAttribute("style", "display:none");
        bt1.setAttribute("style", "display:Bt1");
        bt1.setAttribute("style","margin-left:20%");

    });



    var bt2 = document.getElementById("Bt2");
    var gbr2 = document.getElementById("Gbr2");
    var btn2 = document.getElementById("Btn2");
    bt2.addEventListener("click", function (e) {
        bt2.setAttribute("style", "display:none");
        gbr2.setAttribute("style", "display:block");
        btn2.setAttribute("style", "display:Btn1");
        btn2.addEventListener("click", function (e) {
            gbr2.setAttribute("style", "display:none");
            btn2.setAttribute("style", "display:none");
            bt2.setAttribute("style", "display:Bt1");
            bt2.setAttribute("style","margin-left:20%");
        });
    });


    var bt3 = document.getElementById("Bt3");
    var gbr3 = document.getElementById("Gbr3");
    var btn3 = document.getElementById("Btn3");
    var bulk = document.getElementById("bulk");
    bt3.addEventListener("click", function (e) {
        gbr3.setAttribute("style", "display:block");
        btn3.setAttribute("style", "display:Btn3");
        bt3.setAttribute("style", "display:none");
        btn3.addEventListener("click", function (e) {
            gbr3.setAttribute("style", "display:none");
            btn3.setAttribute("style", "display:none");
            bt3.setAttribute("style", "display:Bt3");
            bt3.setAttribute("style","margin-left:20%");
        });
    });


}

    function Bruh(){
    	Shade();
    	yuhuy();


    }