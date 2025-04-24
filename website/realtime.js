/* 
David Guemes Giles  
04/24/25  
Phase 5 Assignment: JavaScript
dg224@njit.edu  
*/

function getRealTime() {
    // retrieve the DOM objects to place the content
    var domcategories = document.getElementById("categorycount");
    var domitems = document.getElementById("productcount");
    var domlistpricetotal = document.getElementById("listpricetotal");
    var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
    // send the GET request to realtime.php to retrieve the data using XMLHttpRequest
    var request = new XMLHttpRequest();
    request.open("GET", "realtime.php", true);
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            //parse the XML document to get each data element
            var xmldoc = request.responseXML;
            var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
            var categories = xmlcategories.childNodes[0].nodeValue;
            var xmlitems = xmldoc.getElementsByTagName("products")[0];
            var items = xmlitems.childNodes[0].nodeValue;
            var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
            var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
            var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
            var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
            domcategories.innerHTML = categories;
            domitems.innerHTML = items;
            domlistpricetotal.innerHTML = listpricetotal;
            domwholesalepricetotal.innerHTML = wholesalepricetotal;
        }
    };
    request.send();
   }