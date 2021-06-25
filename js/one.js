window.addEventListener("load",check_size);
window.addEventListener("resize",hide_menu);

// prevent showing responsive elements on different resolution
function check_size(){
    // alert(window.innerWidth);
    if(window.innerWidth < 576){
        // alert('window less than 576px');
        dm.style.display = 'none';
        db.style.display = 'block';
    }else{
        // alert('window szerokie');
        dm.style.display = 'block';
        db.style.display = 'none';
    }
}

let dm = document.getElementsByClassName('left')[0]; 
let db = document.getElementById('dynamicbutton');

// make page resposive and displays different css grid and toggle button
function hide_menu(){
    if(window.innerWidth < 576){
        // alert('window less than 576px');
        dm.style.display = 'none';
        db.style.display = 'block';
    }else{
        // alert('window szerokie');
        dm.style.display = 'block';
        db.style.display = 'none';
    }
}

// hide show dynamicmenu on click
db.addEventListener("click",show_hide_dynamic);

function show_hide_dynamic(){
    if(dm.style.display === "none"){
        // alert('show menu');
        dm.style.display = "block";
    }else{
        // alert('hide menu');
        dm.style.display = "none";
    }
}
