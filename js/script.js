let time = 900;

setInterval(function(){
    let m = Math.floor(time/60);
    let s = time%60;

    if(s<10) s="0"+s;

    let t = document.getElementById("timer");
    if(t){
        t.innerText = "Time: " + m + ":" + s;
    }

    time--;

    if(time < 0){
        alert("Time up!");
        document.forms[0].submit();
    }
},1000);


// highlight selected option
document.addEventListener("change", function(e){
    if(e.target.type === "radio"){
        let labels = e.target.closest(".question-box").querySelectorAll("label");
        labels.forEach(l => l.style.background="");

        e.target.parentElement.style.background="#dfe6ff";
    }
});