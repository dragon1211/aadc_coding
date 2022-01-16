google.load("maps", "3.x", {"other_params":"sensor=false"});

function initialize() {

	var latLng = new google.maps.LatLng(35.648798, 139.707962);

	var options = {
		zoom: 17,
		center: latLng,
		scrollwheel: false,
		draggable: false,
		mapTypeControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControl: true,
        zoomControlOptions: {
		style:google.maps.ZoomControlStyle.SMALL
        },
	};
	
	var map = new google.maps.Map(document.getElementById("map"), options);
	
	var styleOptions =
	[
	    {
	        "featureType": "administrative",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "color": "#444444"
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "all",
	        "stylers": [
	            {
	                "color": "#f2f2f2"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "all",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": 45
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "labels.icon",
	        "stylers": [
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "transit",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "all",
	        "stylers": [
	            {
	                "color": "#46bcec"
	            },
	            {
	                "visibility": "on"
	            }
	        ]
	    }
	]
 
	var styledMapOptions = { name: 'Anti-aging Dental Clinic' }
	var styleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('aadc', styleType);
	map.setMapTypeId('aadc');
  
	var icon = new google.maps.MarkerImage('https://www.a-a-d-c.com/wp-content/themes/aadc-wp/assets/images/map-pin.png',/*アイコンの場所*/
		new google.maps.Size(50,70),/*アイコンのサイズ*/
		new google.maps.Point(0,0)/*アイコンの位置*/
	);
	var markerOptions = {
		position: latLng,
		map: map,
		icon: icon,
		title: 'Anti-aging Dental Clinic'
	};
	var marker = new google.maps.Marker(markerOptions);

	
}

google.setOnLoadCallback(initialize);
