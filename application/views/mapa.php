<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Labeling features client-side</title>
    <link rel="stylesheet" href="https://js.arcgis.com/3.23/esri/css/esri.css">
    <style>
      html, body, #map {
        height: 100%; width: 100%; margin: 0; padding: 0; 
      }
    </style>

   <script src="https://js.arcgis.com/3.23/"></script>
    <script>
      var map;
    
      require([
        "esri/map", 
        "esri/geometry/Extent",
        "esri/layers/FeatureLayer",
        "esri/symbols/SimpleLineSymbol",
        "esri/symbols/SimpleFillSymbol",
        "esri/symbols/SimpleMarkerSymbol",
        "esri/symbols/TextSymbol",
        "esri/renderers/SimpleRenderer",
        "esri/layers/LabelClass",
        "esri/Color",
         "dojo/on",
         "esri/graphic",
         "esri/lang",
         "esri/geometry/webMercatorUtils",
        "dojo/domReady!"
      ], function(Map, Extent, FeatureLayer,
                  SimpleLineSymbol, SimpleFillSymbol, SimpleMarkerSymbol,
                  TextSymbol, SimpleRenderer, LabelClass, Color, on, Graphic, lang,webMercatorUtils) 
      {
        // load the map centered on the United States
        // var bbox = new Extent({"xmin": -1940058, "ymin": -814715, "xmax": 1683105, "ymax": 1446096, "spatialReference": {"wkid": 102003}});
      
        //create the map and set the extent, making sure to "showLabels"
        map = new Map("map", {
          basemap: "satellite",
          center: [-77,-9.5],
          zoom: 5,
          showLabels : true //very important that this must be set to true!   
        });

        var statesUrl = "http://arcgis.inei.gob.pe:6080/arcgis/rest/services/ods/Dep_Peru/MapServer/0";
        var states = new FeatureLayer(statesUrl, {
          id: "IDDPTO",
          outFields: ["*"]
        });

        var statesLabel = new Color("#fff");
        var statesLabel = new TextSymbol().setColor(statesLabel);
        statesLabel.font.setSize("8pt");
        statesLabel.font.setFamily("arial");

        //this is the very least of what should be set within the JSON  
        var json = {
          "labelExpressionInfo": {"value": "{NOMBDEP}"}
        };

        //create instance of LabelClass (note: multiple LabelClasses can be passed in as an array)
        var labelClass = new LabelClass(json);
        labelClass.symbol = statesLabel; // symbol also can be set in LabelClass' json
        states.setLabelingInfo([ labelClass ]);

        var graphic;

        on(map, "load", function (){
          console.log("Map load event");

        });

        on(map, "click", function (event){
          console.log("Map click event");

          var markerSymbol = new SimpleMarkerSymbol(SimpleMarkerSymbol.STYLE_X,
          12, new SimpleLineSymbol(SimpleLineSymbol.STYLE_SOLID,
            new Color([92, 156, 255, 1]), 4));
          // Add a graphic at the clicked location
           if (graphic) {
            graphic.setGeometry(event.mapPoint);
          }
          else {
            graphic = new Graphic(event.mapPoint, markerSymbol);
            map.graphics.add(graphic);
          }

          formatNumber = function (value, key, data){
            return value.toFixed(2);
          };

          var infoContent = lang.substitute(
            webMercatorUtils.webMercatorToGeographic(event.mapPoint),
            "Latitude (y): ${y:formatNumber} <br> Longitude (x): ${x:formatNumber}");

          map.infoWindow.setTitle("Location:");
          map.infoWindow.setContent(infoContent);
          map.infoWindow.show(event.mapPoint);
        });


        map.addLayer(states);
        
    
      });
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>
