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
  	 '<button class="button" onclick="createRouteMap()">Ruta</button>'+
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
  	 var imgToShow = document.getElementById("showImg");
  	 map.style.opacity="0.4";
    map.style.MozTransitionDuration="1.5s";

    imgToShow.style.visibility="visible";
    //For Firefox
    imgToShow.style.MozTransitionDuration="2000ms";
    imgToShow.style.MozTransform="scale(1)";
    //For Safari, Google Chrome
    imgToShow.style.WebkitTransitionDuration="2000ms";
    imgToShow.style.WebkitTransform="scale(1)";
    //For Opera
    imgToShow.style.TransitionDuration="2000ms";
    imgToShow.style.Transform="scale(1)";
    //For IE (still exist?)
    imgToShow.style.MsTransitionDuration="2000ms";
    imgToShow.style.MsTransform="scale(1)";
  }
  
  function hideImg() {
    var imgToShow = document.getElementById("showImg");
    imgToShow.style.MozTransitionDuration="2000ms";
    imgToShow.style.MozTransform="scale(0)";
    var map = document.getElementById("map");
  	 map.style.opacity="1";
    map.style.MozTransitionDuration="1.5s";
  }

google.maps.event.addDomListener(window, 'load', initialize);
