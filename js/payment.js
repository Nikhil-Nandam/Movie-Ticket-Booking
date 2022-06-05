const contact=document.getElementById("wrapper");
let contactShow=true;

function showContact(){
    if ( contactShow ){
        contact.hidden=false;
        contactShow=false;
    }
    else{
        contact.hidden=true;
        contactShow =true
    }

}
