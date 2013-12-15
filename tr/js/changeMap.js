  var mapHeight;
  var routeMap;
  var map;
  //Change from main map to map with a choosen route
  function createRouteMap() {  	
    mapHeight = hideMap();
    setTimeout(function(){showRouteMap(mapHeight)},1500);    
    setTimeout(function() {showElementsRouteMap()},2700); 
    routeMap.style.height=mapHeight + "px";     
  }
  
  //hide main map
  function hideMap() {
  	 map = document.getElementById("map");
    var mapHeight = map.clientHeight // map.scrollHeight,	map.offsetHeight)
    map.style.marginLeft="-100%"; 
    map.style.MozTransform="scale(1)";
    map.style.MozTransitionDuration="2000ms";
    return mapHeight;
  }
  
  //show a map with choosen route
  function showRouteMap(mapHeight) {  
    routeMap = document.getElementById("routeMap");    
    initializeRoute();
    routeMap.style.marginTop="-" + mapHeight + "px";
    routeMap.style.MozTransform="scale(1)";
    routeMap.style.MozTransitionDuration="2000ms";
  }
  
  //show UI elements of route map
  function showElementsRouteMap() {
  		var scrHeight = screen.height;
  		var panel = document.getElementById("panel");
  		panel.style.display="block";
  		var message_panel = document.getElementById("message_panel");
  		message_panel.style.display="block";
  		message_panel.style.height=scrHeight*0.05 + "px";
  		message_panel.style.marginTop=scrHeight*0.95 - 120 + "px"; 
  		document.getElementById("toMap").style.display="block"; 		
  }
  
  function toMainMap() {
	 HideElementsMapRoute();
	 hideRouteMap();    
	 setTimeout(function() {showMap()},1700);  
  }
  
  function HideElementsMapRoute() {
  	 	document.getElementById("message_panel").style.display="none";
  	 	document.getElementById("panel").style.display="none";
		document.getElementById("toMap").style.display="none";		
  }
  
  function hideRouteMap() {
    routeMap.style.marginTop="0px";
    routeMap.style.MozTransform="scale(1)";
    routeMap.style.MozTransitionDuration="2000ms";
  }
  
  function showMap() {
  	 map = document.getElementById("map");
    map.style.marginLeft="0px";
    map.style.MozTransform="scale(1)";
    map.style.MozTransitionDuration="2000ms";
    routeMap.style.height="0px";
  }