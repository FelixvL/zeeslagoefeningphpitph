var aantalBeurten = 0;


function inputPlayer(vakjeNummer){
    aantalBeurten++;
    document.getElementById("aantalBeurtenBijhouder").value = aantalBeurten;
    var vakje = document.getElementById('vakje'+vakjeNummer);
    console.log(vakje);
    if(vakje.innerHTML == 'X'){
        vakje.innerHTML = 'O';
        vakje.style = "background-color:green";
    }else{
        vakje.innerHTML = 'X';
        vakje.style = "background-color:red";
    }
    checkIfIsWinner();
}

function directeVerwijzing(){
    document.location = "contact.php?naamSpeler=Fred&aantalBeurten=24";
}
function checkIfIsWinner(){
    var symbolVakje1 = document.getElementById('vakje1').innerHTML;
    var symbolVakje2 = document.getElementById('vakje2').innerHTML;
    var symbolVakje3 = document.getElementById('vakje3').innerHTML;
    if(symbolVakje1 == ""){
        return;
    }
    if(symbolVakje1 == symbolVakje2 && symbolVakje2 == symbolVakje3){
        alert();
    }
    
}