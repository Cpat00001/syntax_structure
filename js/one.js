window.addEventListener("resize",hide_menu);

let dm = document.getElementsByClassName('dynamicmenu')[0]; 
let db = document.getElementsByClassName('dynamicbutton')[0];

function hide_menu(){
    if(window.innerWidth < 576){
        dm.style.display = 'none';
        db.style.display = 'block';
        // alert('window less than 576px');
    }else{
        // alert('window szerokie');
        dm.style.display = 'block';
        db.style.display = 'none';
    }
}

// hide show dynamicmenu on click
// db.addEventListener("click",show_hide_dynamic);

// function show_hide_dynamic(){
//     if(dm.style.display === "none"){
//         dm.style.display = "block";
//     }else{
//         dm.style.display = "none";
//     }
// }

function show_hide_dynamic(){
        dm.style.display = "block";
        alert('test');
    }
