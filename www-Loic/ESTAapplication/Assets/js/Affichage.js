/**
 * Created by drakness_power on 21/11/2016.
 */

/* Début */
window.addEventListener("hashchange", function() { scrollBy(0, -50) })
function Selection_Action(){
//fonction permettant de renvoyer le choix de l'action séléctionner

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
        connect.onreadystatechange=function(){
            if (connect.readyState==4 && connect.status==200){
                //Ajoute dans l'élément 'choix' les données qui seront envoyé
                document.getElementById("choix").innerHTML=
                    connect.responseText;
            }
        };

        //ouvre le fichier ControllerAffichage.php  + true = connexion asynchrone
        connect.open("POST","App/Controller/Choix.php",true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        // recupere la valeur de la liste déroulante d'identifiant du choix de l'action
        choix = document.getElementById('selection');
        idChoix = choix.options[choix.selectedIndex].value;

        var nav=document.getElementsByClassName("fixed-nav-bar");
        var nav0=nav[0];
        var aTag = document.createElement('a');
        aTag.setAttribute('href',"#valider_choix");
        aTag.setAttribute('id',"btnID3");
    aTag.setAttribute('onclick',"scrolldown()");

    aTag.innerHTML = "->"+idChoix;
        nav0.appendChild(aTag);
        //envoie de cette valeur sous le nom de 'idChoix'
        connect.send("idChoix="+idChoix);

        //désactive la liste de séléction du choix de l'action et le bouton permettant de faire appel à cette fonction
        document.getElementById('selection').disabled=true;
        document.getElementById('valider_choix').disabled=true;

}

function scrolltop(){
    window.scrollTo(0, 0);
}

function scrollbot(){
    window.scrollBy(0, 99999);
}
/* Boutton changer */

function Changer_Selection_Choix() {
    clearNav()
    //fonction permettant la modification du choix de l'action après une première selection

    //activation de la liste déroulante de séléction du choix de l'action  et du bouton de validation
    document.getElementById('selection').disabled=false;
    document.getElementById('valider_choix').disabled=false;
}

/*      */


/* Partie Affichage */

function Selection_Poles_Affichage(){
//fonction permettant de renvoyer le pôe séléctionner

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            //Ajoute dans l'élément 'tables' les données qui seront envoyé
            document.getElementById("tables").innerHTML=
                connect.responseText;
        }
    };

    //ouvre le fichier ControllerAffichage.php  + true = connexion asynchrone
    connect.open("POST","App/Controller/TableAffichage.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    // recupere la valeur de la liste déroulante d'identifiant poles
    poles = document.getElementById('poles');
    idPoles = poles.options[poles.selectedIndex].value;

    var nav=document.getElementsByClassName("fixed-nav-bar");
    var nav0=nav[0];
    var aTag = document.createElement('a');
    aTag.setAttribute('href',"#valider_poles");
    aTag.setAttribute('id',"btnID3");
    aTag.setAttribute('onclick',"scrolldown()");

    aTag.innerHTML = "->"+idPoles;
    nav0.appendChild(aTag);

    //envoie de cette valeur sous le nom de 'idPôles'
    connect.send("idPôles="+idPoles);

    //désactive la liste de séléction des pôles et le bouton permettant de faire appel à cette fonction
    document.getElementById('poles').disabled=true;
    document.getElementById('valider_poles').disabled=true;

}


function Selection_Table_Affichage(){

    table = document.getElementById('table1');
    liste = table.options[table.selectedIndex].value;;
    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){

            //Ajoute dans l'élément 'champs' les données qui seront envoyé
            document.getElementById("champs").innerHTML=
                connect.responseText;
        }
    };

    //ouvre le fichier ControllerChamps.php +assychrone
    connect.open("POST","App/Controller/ChampsAffichage.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    var nav=document.getElementsByClassName("fixed-nav-bar");
    var nav0=nav[0];
    var aTag = document.createElement('a');
    aTag.setAttribute('href',"#table1");
    aTag.setAttribute('id',"btnID3");
    aTag.setAttribute('onclick',"scrolldown()");

    aTag.innerHTML = "->"+liste;
    nav0.appendChild(aTag);
    // renvoie la liste  des tables selectionner par l'utilisateur sous la forme de chaîne de caractère de nom 'idTables'
    connect.send("idTables="+liste);
    console.log(liste);

    //désactive la séléction des tables
    document.getElementById('table1').disabled=true;

}

function Recupere_champsAffichage() {
    // fonction qui récuper les champs séléctionner et qui les renvoie sous forme de chaîne de caractère

    //récuperation de la liste des champs séléctionner
    var liste_champs = [];
    var i;
    var champ = document.getElementById('affiche_champs');
    for (i = 0; i < champ.length; i++) {
        liste_champs.push(champ.options[i].value);
    }

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange = function () {
        if (connect.readyState == 4 && connect.status == 200) {
            document.getElementById("ok").innerHTML =
                connect.responseText;
        }
    };
    //Ouvre le fichier Donnees.php + asychrone
    connect.open("POST", "App/Controller/Donnees.php", true);
    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //envoie la liste de champs précedement récuperer
    connect.send("liste_champs=" + liste_champs);
}
function ranger(text){
    var tab=document.getElementById("main_table");
    console.log(tab);
    var trs=tab.getElementsByTagName("tr");
    console.log(trs);
    var x=trs[0];
    console.log(x);
    var champs=x.getElementsByTagName("td");
    var list=[];
    for(var y=0;y<champs.length;y++){
        list.push(champs[y].firstChild.innerHTML);
    }
    var table1=document.getElementById("table1");
    var table=table1.options[table1.selectedIndex].value;;

    console.log("table : ",table)
    console.log(" list : ",list);
    console.log(" text : ",text)
    var col=text;

    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){

        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            s=xmlhttp.responseText;
            tab.innerHTML=s;
            cleartab();

        }
    }
    xmlhttp.open("GET","App/Controller/ranger.php?table="+table+"&list="+list+"&col="+text,true);
    xmlhttp.send();




}

function updateBDD(){
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){

        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            s=xmlhttp.responseText;

            console.log(" tableu res : ",s)

        }
    }
    xmlhttp.open("GET","../updateBDD.php",true);
    xmlhttp.send();

}

function MIA(){
    var tab=document.getElementById("main_table");
    console.log(tab);
    var trs=tab.getElementsByTagName("tr");
    console.log(trs);
    var x=trs[0];
    console.log(x);
    var champs=x.getElementsByTagName("td");
    var list=[];
    var e = document.getElementById("select_mia");
    var mia = e.options[e.selectedIndex].text;
    for(var y=0;y<champs.length;y++){
        list.push(champs[y].firstChild.innerHTML);
    }
    var table1=document.getElementById("table1");
    var table=table1.options[table1.selectedIndex].value;;

    console.log("table : ",table)
    console.log(" list : ",list);

    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){

        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            s=xmlhttp.responseText;

            console.log(" tableu res : ",s)
            tab.innerHTML=s;
            cleartab();

        }
    }
    xmlhttp.open("GET","App/Controller/mia.php?table="+table+"&list="+list+"&col="+mia,true);
    xmlhttp.send();




}
function cleartab(){
    var tab=document.getElementById("main_table");
    var tb=tab.childNodes[1];
    console.log(tb.childNodes);
    tb.removeChild(tb.firstChild);
    console.log(tb.childNodes);
}
function file(){
    var x=document.getElementById("fichier").value;
    console.log(x);

    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            console.log(connect.responseText);
        }
    };
    connect.open("POST","App/Controller/fileToBDD.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send("file="+x);
}
function AfficheDonnees() {
    //Fonction identique à celle juste au dessous, ouvre le fichier showDonnees.php au lieu de Donnees.php

    var liste_champs = []; var i;
    var champ = document.getElementById('affiche_champs');
    for (i = 0; i <champ.length; i++){
        liste_champs.push(champ.options[i].value);
    }
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            document.getElementById("ok").innerHTML=
                connect.responseText;
        }
    };
    console.log(liste_champs);
    connect.open("POST","App/Controller/showDonnees.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send("liste_champs="+liste_champs);


}

/*           */


/* Partie Export */

function Selection_Poles_Export(){
//fonction permettant de renvoyer le pôe séléctionner

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            //Ajoute dans l'élément 'tables' les données qui seront envoyé
            document.getElementById("tables").innerHTML=
                connect.responseText;
        }
    };

    //ouvre le fichier ControllerAffichage.php  + true = connexion asynchrone
    connect.open("POST","App/Controller/TableExport.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    // recupere la valeur de la liste déroulante d'identifiant poles
    poles = document.getElementById('poles');
    idPoles = poles.options[poles.selectedIndex].value;

    var nav=document.getElementsByClassName("fixed-nav-bar");
    var nav0=nav[0];
    var aTag = document.createElement('a');
    aTag.setAttribute('href',"#valider_poles");
    aTag.setAttribute('id',"btnID3");
    aTag.setAttribute('onclick',"scrolldown()");

    aTag.innerHTML = "->"+idPoles;
    nav0.appendChild(aTag);
    //envoie de cette valeur sous le nom de 'idPôles'
    connect.send("idPôles="+idPoles);

    //désactive la liste de séléction des pôles et le bouton permettant de faire appel à cette fonction
    document.getElementById('poles').disabled=true;
    document.getElementById('valider_poles').disabled=true;


}
function scrolldown() {
    window.scrollBy(0,50);

}
function clearNav() {
    var nav=document.getElementsByClassName("fixed-nav-bar");
    var nav0=nav[0];
    var a=nav0.getElementsByTagName("a");
    var conn=a[0];
    console.log(a)
    console.log(conn);
    nav0.innerHTML="";
    nav0.innerHTML+="<a id='btnID3' href='App/Controller/Admin/Session.php' style='text-decoration:none;'>Connexion</a><a id='btnID3' href='App/Views/Stats.html' style='text-decoration:none;'>Stats</a><button id='btnID2' onclick='scrollbot()'>v</button><button id='btnID2' onclick='scrolltop()'>^</button>";
    // if(a.length!=1) {
    //     for (var x = 0; x < a.length; x++) {
    //         nav[0].removeChild(a[x]);
    //     }
    // }
//    nav[0].appendChild(conn);

}


function Selection_Table_Export() {
    //fonction permettant de séléctioner une liste de table dont on veux connaître les champs

    //déclaration de variable
    var liste = []; var i; var table;

    //récuperation de l'identifiant contenant la liste des tables
    table = document.getElementById('table2');

    //boucle permettant d'ajouter à la liste chaque nom de table contenu dans la liste d'indetifiant table2
    for (i=0; i < table.options.length; i++) {
        liste.push(table.options[i].value);
    }

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){

            //Ajoute dans l'élément 'champs' les données qui seront envoyé
            document.getElementById("champs").innerHTML=
                connect.responseText;
        }
    };

    //ouvre le fichier ControllerChamps.php +assychrone
    connect.open("POST","App/Controller/ChampsExport.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    // renvoie la liste  des tables selectionner par l'utilisateur sous la forme de chaîne de caractère de nom 'idTables'
    connect.send("idTables="+liste);

    //désactive la séléction des tables et le bouton de validation de séléction
    document.getElementById('table1').disabled=true;
    document.getElementById('table2').disabled=true;
    document.getElementById('add').disabled=true;
    document.getElementById('remove').disabled=true;
    document.getElementById('addAll').disabled=true;
    document.getElementById('removeAll').disabled=true;

}

function Changer_selection_Tables() {
    clearNav()
    //en cours de modifiction

    var liste_sauvegarde_champ = []; var i;
    var champ_sauvegarde = document.getElementById('affiche_champs');
    for (i=0; i < champ_sauvegarde.options.length; i++) {
        liste_sauvegarde_champ.push(champ_sauvegarde.options[i].value);
    }
    return liste_sauvegarde_champ;

}
function Active_Selection_Table(){
    clearNav()
    //fonction permettant de rendre possible la séléction des tables en réactivant les éléments

    document.getElementById('table1').disabled=false;
    document.getElementById('table2').disabled=false;
    document.getElementById('add').disabled=false;
    document.getElementById('remove').disabled=false;
    document.getElementById('addAll').disabled=false;
    document.getElementById('removeAll').disabled=false;
}

function Recupere_champsExport() {
    // fonction qui récuper les champs séléctionner et qui les renvoie sous forme de chaîne de caractère

    //récuperation de la liste des champs séléctionner
    var liste_champs = []; var i;
    var champ = document.getElementById('affiche_champs');
    for (i = 0; i <champ.length; i++){
        liste_champs.push(champ.options[i].value);
    }

    //instancie une connexion HTTP
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            document.getElementById("ok").innerHTML=
                connect.responseText;
        }
    };
    //Ouvre le fichier Donnees.php + asychrone
    connect.open("POST","App/Controller/Donnees.php",true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    //envoie la liste de champs précedement récuperer
    connect.send("liste_champs="+liste_champs);
}

function ExportToExcel(){
    var htmltable= document.getElementById('main_table');
    var html = htmltable.outerHTML;
    window.open('data:application/vnd.ms-excel;charset=UTF-8,' + encodeURIComponent(html));
}

function ExportDonnees() {
    //Fonction identique à celle juste au dessous, ouvre le fichier ControllerExport.php au lieu de showDonnees.php

    //document.appendChild('<div class="loader"></div>');
    document.body.innerHTML += '<div class="loader"></div>';
    ExportDonnes2();

}
function search(){

    var text=document.getElementById("search_bar").value;
    console.log("html : ",text);

    var tab=document.getElementById("main_table");
    var td=tab.getElementsByTagName("td");

    for(var z=0;z<td.length;z++){
        console.log(td[z]);
        if((new RegExp(text)).test(td[z].innerHTML)){
            console.log("found");

            var y=td[z-4];


        }

        //location.href = "#myDiv";
    }
    y.scrollIntoView();
    scrollBy(0,-50)
}



function ExportDonnes2() {
    var liste_champs = []; var i;
    var champ = document.getElementById('affiche_champs');
    for (i = 0; i <champ.length; i++){
        liste_champs.push(champ.options[i].value);
    }
    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            document.getElementById("ok").innerHTML=
                connect.responseText;
        }
    };
    connect.open("POST","App/Controller/ValideDonnees_Export.php",false);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send("liste_champs="+liste_champs);

    // var x = document.getElementsByClassName("loader");
    // console.log(x);
    // x.parentNode.removeChild(x);

    var elements = document.getElementsByClassName("loader");

    while (elements[0]) {
        elements[0].parentNode.removeChild(elements[0]);
    }
}


/*       */


/*Partie Commune */


function Changer_Selection_Poles() {
    clearNav()
    //fonction permettant la modification du choix du pôles après une première selection

    //activation de la liste déroulante de séléction des pôles et du bouton de validation
    document.getElementById('poles').disabled=false;
    document.getElementById('valider_poles').disabled=false;
}


function swap(listFrom, listTo){
    //fonction permettant de faire passer un élément d'une colone select à l'autre

    //récupération des champs select par leur nom
    fromList=document.getElementsByName(listFrom)[0];
    toList = document.getElementsByName(listTo)[0];

    //boucle tant qu'un élément est seletionner on ajoute dans l'autre liste
    while (fromList.selectedIndex != -1){
        //appel de addOption permettant d'ajouter un élément dans un select
        addOption(toList,fromList.options[fromList.selectedIndex]);

        //supression de l'élément transférer dans la liste de début
        fromList.options.remove(fromList.selectedIndex);
    }
}
scroll
function addOption(list, option){
    //fonction permettant d'ajouter la valeur d'une option

    list.options[list.options.length]=new Option(option.innerHTML,option.value);

}
function stats() {
    var form=document.getElementById("stats");
    var selects=form.getElementsByTagName("select");
    console.log(selects);
    var s="";
    for( var i=0;i<selects.length;i++){
        if(selects[i].options[selects[i].selectedIndex].value!="-") {
            if(selects[i].name=='boursier_etudiant'){
                s += selects[i].name + " like '%BOURSIER%'";
                s+=" AND "
            }else {
                s += selects[i].name + "='" + selects[i].options[selects[i].selectedIndex].value + "'";
                s += " AND "
            }

        }
    }
    s=s.substring(0, s.length - 5);
    console.log(s);

    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            var resu=connect.responseText;
            console.log(resu);
            var tab=document.getElementById("main_tab");
            tab.innerHTML=resu;


        }
    };
    connect.open("POST","../../App/Controller/stats.php",false);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send("s="+s);

    var connect = new XMLHttpRequest();
    connect.onreadystatechange=function(){
        if (connect.readyState==4 && connect.status==200){
            var resu=connect.responseText;
            console.log(".",resu,".");
            var numberPattern = /\d+/g;
            var nb=resu.match( numberPattern );
            console.log(nb);
            var tab=document.getElementById("main_tab");

            var tr=document.getElementsByTagName("tr").length;
            var trs=tr-1
            tab.innerHTML+="Nombre d'entrées : "+trs +" total : " +Math.floor((trs / nb[0]) * 100)+"%";
        }
    };
    connect.open("POST","../../App/Controller/statsNB.php",false);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send("s="+s);

}

function afficheHistorique() {
    var tab = document.getElementById("main_table");
    if (tab.innerHTML != "") {
        tab.innerHTML = "";
    }
    else {
        var connect = new XMLHttpRequest();
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status == 200) {
                var resu = connect.responseText;
                console.log(resu);
                var tab = document.getElementById("main_table");
                tab.innerHTML += resu;
            }
        };
        connect.open("POST", "../../Controller/historique.php", false);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send("bla");
    }
}









