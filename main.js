function findRoom(date) {
    var xmlhttp = new XMLHttpRequest();
    var url = "localhost:8080/soa64_03/rest/services/reserve";
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this, i);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function loadXMLDoc() {
    
}

function myFunction(xml) {
    var i;
    var json = xml.responseXML;
    console.log(json)
    var table = '<thead><tr><th hidden="true">id</th><th>เวลา</th><th>ผู้จอง</th><th>สถานะ</th></tr></thead>';
    /*var x = json.getElementsByTagName("CD");
    for (i = 0; i < x.length; i++) {
        table += '<tr><td>' +
            x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
            "</td></tr>";
    }*/
    document.getElementById("showFreeRoom").innerHTML = table;
}

