//Create a map with markers

function initialize() {
  // Create a map and center it on BCN.
  var bcn = new google.maps.LatLng(41.38, 2.17);
  var mapOptions = {
  	 scrollwheel: false,
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: bcn
  };
  //Put the created map in div with id='map'
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	//Create the image object
  var image = {
  	url: 'img/m.png',
  	size: new google.maps.Size(50, 50)
 };
   
  var textFirstRoute = '<div id="content">'+
    '<h3>Primera Ruta</h3>'+
  	 '<div id="bodyContent">Descripció de primera ruta</div>'+  	 
  	 '<img src="img/colon.jpg" alt="Monumento a Colon" height="70" width="50"/>'+  	 
  	 '<button class="button" onclick="seeImg()">Images</button>'+
  	 '<button class="button" onclick="createMapRuta()">Ruta</button>'+
  	 '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: textFirstRoute	
  });  
  var FirstRouteLatLng = new google.maps.LatLng(41.382, 2.176);
  //Add marker to the map
  var putMarker = new google.maps.Marker({
	 position: FirstRouteLatLng,
	 map: map,
	 icon: image,
	 title: 'Titól de primera ruta'
  });
  google.maps.event.addListener(putMarker, 'click', function() {
  	 infowindow.open(map,putMarker);
  });
  //document.getElementsByTagName("html")[0].style.overflow = "hidden";
}

  function seeImg() {
  	 var map = document.getElementById("map");
  	 map.style.opacity="0.4";
    map.style.MozTransitionDuration="1.5s";

    document.getElementById("showImg").style.visibility="visible";
    //For Firefox
    document.getElementById("showImg").style.MozTransitionDuration="2000ms";
    document.getElementById("showImg").style.MozTransform="scale(1)";
    //For Safari, Google Chrome
    document.getElementById("showImg").style.WebkitTransitionDuration="2000ms";
    document.getElementById("showImg").style.WebkitTransform="scale(1)";
    //For Opera
    document.getElementById("showImg").style.OTransitionDuration="2000ms";
    document.getElementById("showImg").style.OTransform="scale(1)";
    //For IE (still exist?)
    document.getElementById("showImg").style.MsTransitionDuration="2000ms";
    document.getElementById("showImg").style.MsTransform="scale(1)";
  }
  
  function hideImg() {
    document.getElementById("showImg").style.MozTransitionDuration="2000ms";
    document.getElementById("showImg").style.MozTransform="scale(0)";
    var map = document.getElementById("map");
  	 map.style.opacity="1";
    map.style.MozTransitionDuration="1.5s";
  }
  
  function createMapRuta() {
    document.getElementById("mapRuta").style.MozTransitionDuration="2000ms";
    document.getElementById("mapRuta").style.MozTransform="scale(1)";
    window.location.href = "index2.html"
  }

google.maps.event.addDomListener(window, 'load', initialize);
