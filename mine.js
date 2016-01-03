var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","mine.php",true);
xmlhttp.send();

// When DOM gets loaded, 

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("data").innerHTML = xmlhttp.responseText;
        
        var obj = JSON.parse(xmlhttp.responseText);        
        console.log(obj);
    }
}
