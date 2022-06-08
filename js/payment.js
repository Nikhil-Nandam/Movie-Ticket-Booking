const contact=document.getElementById("wrapper");
let contactShow=true;
const netBanking=document.getElementById("net-banking");
let showNetBanking=true;
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
function showNetBank(){
    if ( showNetBanking ){
        netBanking.hidden=false;
        showNetBanking=false;

    }
    else{
        netBanking.hidden=true;
        showNetBanking =true
    }

}

