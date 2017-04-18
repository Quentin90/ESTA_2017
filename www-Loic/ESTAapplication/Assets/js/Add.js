/**
 * Created by drakness_power on 28/11/2016.
 */


function Selection_Table() {
    //instancie une connexion HTTP
    var choix = [];
    table = document.getElementById('table_select');
    idTables = table.options[table.selectedIndex].value;
    operation = document.getElementById('operation_select');
    idOperation = operation.options[operation.selectedIndex].value;
    choix.push(idTables);
    choix.push(idOperation);
    var connect = new XMLHttpRequest();
    connect.onreadystatechange = function () {
        if (connect.readyState == 4 && connect.status == 200) {
            //Ajoute dans l'élément 'tables' les données qui seront envoyé
            document.getElementById("form").innerHTML =
                connect.responseText;
        }
    };

    //ouvre le fichier ControllerAffichage.php  + true = connexion asynchrone
    connect.open("POST", "../../Controller/Admin/Add.php", true);
    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // recupere la valeur de la liste déroulante d'identifiant poles
    //envoie de cette valeur sous le nom de 'idPôles'
    connect.send("idChoix=" + choix);
}

function search2(){

    var text=document.getElementById("search_bar").value;
    console.log("html : ",text);

    var tab=document.getElementsByTagName("table");
    console.log(tab);
    var td=tab[1].getElementsByTagName("td");
    console.log(td);

    for(var z=0;z<td.length;z++){
        console.log(td[z]);
        if((new RegExp(text)).test(td[z].innerHTML)){
            console.log("found");

            var y=td[z-1];


        }

        //location.href = "#myDiv";
    }
    y.scrollIntoView();
    window.scrollBy(-200,-60)
}

