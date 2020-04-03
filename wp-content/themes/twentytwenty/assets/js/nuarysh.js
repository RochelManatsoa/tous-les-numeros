// Get the button that opens the modal

//--------------------------------------------------------------

    var key = "UdT15bkN9JmEqqNJ9MKbMdJb";
    var header = '{ "alg": "HS256", "typ": "JWT"}';
  
    if(typeof get !== 'undefined' ){
        var result = document.getElementById('result-search');
        var defaultResult = result.parentNode;
        var playload = "";
        if(get.part != null){
            payload = '{ "nom": "'+encodeURI(get.part)+'", "ville": "'+encodeURI(get.ville)+'" }';
        }else{
            payload = '{ "nom": "'+encodeURI(get.pro)+'|'+'", "ville": "'+encodeURI(get.ville)+'" }';
        }
        unsignedToken = base64_encode(header) + '.' + base64_encode(payload);
        signature = CryptoJS.HmacSHA256(unsignedToken, key);
        token = base64_encode(header) + '.' + base64_encode(payload) + '.' + CryptoJS.enc.Base64.stringify(signature);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            //result.innerHTML='<%= image_tag("ajax-loader.gif") %>';
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                JSONObject = JSON.parse(xmlhttp.responseText);
                result.innerHTML=xmlhttp.responseText;
                

                addrSender = new Array();
                console.log(JSONObject.code);
                //var str = [];
                var str = '';
                if(JSONObject.code !== null){
                    
                    for (var i = 0; i < JSONObject.code.length; i++)
                    {
                        var j=i;


                        //----------------------------------------------------

                        var name = JSONObject.code[i].nom;
                        var surname = JSONObject.code[i].prenom;
                        var number = JSONObject.code[i].numero;
                        var adress = JSONObject.code[i].adresse;
                        var cp = JSONObject.code[i].codepostal;
                        var city = JSONObject.code[i].ville;
                        //----------------------------------------
                        var section = "<section class='section-inner medium'>";
                        var row = "<div class='list-result_'>";
                        var left = "<div class='list-result_l'>";
                        var start = "<div class='society'>"+name+"</div>";
                        var paragraph = "<p>Service (réclamation-client- SAV)</p>";
                        var telDiv = "<div class='btn_appel btn_appel_deskotp'>";
                        var cartouch = "<a href='tel:118001' class='btn-appel'>Appeler <span class='shine'></span><span class='line'></span></a><img id='cartouche_' src='http://wp.tous-les-numeros.fr/wp-content/uploads/2020/04/cartouche-appel.png' alt='118001' />";
                        var right = "</div></div><div class='list-result_r'>";
                        var containerAdress = "<div><div class='adr'>"+adress+" "+cp+" "+city+"</div>";
                        var telNumber = "<div class='tel_'><strong>Téléphone</strong></div>";
                        var title = "<div class='reseau_s'>Réseaux sociaux</div></div>";
                        var desc = "</div></div>";
                        var sectionEnd = "</section>";


                        addrSender.push([JSONObject.code[i]._id.$id, JSONObject.code[i].adresse+', '+JSONObject.code[i].ville+' '+JSONObject.code[i].codepostal]);
                        if(JSONObject.code[i].nom != null && JSONObject.code[i].ville !=null){


                            str += section + row + left + start + paragraph + telDiv + cartouch + right + containerAdress + telNumber + title + desc + sectionEnd;

                            //var address = addrSender[i][1];
                            //tabadd.push(address);
                            //console.log(address);
                            //console.log(tabadd[i]);

                        }
                        else{
                            str += 'Ville ou nom recherché(e) inconnue';
                        }
                    }
                    result.innerHTML = str;
                }
            }
        }
        if (get.part == null || get.part == "", get.pro == null || get.pro == "", get.ville == null || get.ville == ""){
            false;
        }else if(get.part == null || get.part == ""){
            xmlhttp.open("GET","http://jn650.jn-hebergement.com/WS_118001/index.php?cmd=findmetier&data="+urlencode(token),false);
            xmlhttp.send();
        }else if(get.pro == null || get.pro == ""){
            xmlhttp.open("GET","http://jn650.jn-hebergement.com/WS_118001/index.php?cmd=findname&data="+urlencode(token),false);
            xmlhttp.send();
        }
    }
    