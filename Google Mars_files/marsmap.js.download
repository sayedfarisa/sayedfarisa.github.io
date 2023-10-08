// Copyright 2012 Google Inc. All Rights Reserved.

/**
 * Generates Map Type Options.
 * @author mikeperrow@google.com (Mike Perrow)
 */


/**
 * Adds custom map types for each type of Mars imagery.
 * @param {google.maps.Map} map The map to which to add these map types.
 * @param {Element} captionElem The element for caption text.
 * @param {Element} copyrightElem The element for copyright text.
 */
function addMarsMapTypes(map, captionElem, copyrightElem) {
  var mapsServer = 'mw1.google.com/mw-planetary/mars/';
  var maps = {
    elevation: {
      location: mapsServer + 'elevation',
      name: 'elevation',
      zoomlevels: 9,
      copyright: 'NASA / JPL / GSFC / Arizona State University',
      caption: 'A shaded relief map color-coded by altitude'
    },
    visible: {
      location: mapsServer + 'visible',
      name: 'visible',
      zoomlevels: 10,
      copyright: 'NASA / JPL / MSSS / Arizona State University',
      caption: 'A mosaic of images from the visible portion of the spectrum'
    },
    infrared: {
      location: mapsServer + 'infrared',
      name: 'infrared',
      zoomlevels: 13,
      copyright: 'NASA / JPL / Arizona State University',
      caption: 'A mosaic of images from the infrared portion of the spectrum'
    }
  };

  map.mapTypes.set('elevation', makeMarsMapType(maps['elevation']));
  map.mapTypes.set('visible', makeMarsMapType(maps['visible']));
  map.mapTypes.set('infrared', makeMarsMapType(maps['infrared']));

  google.maps.event.addListener(map, 'maptypeid_changed', function() {
    captionElem.innerHTML = maps[map.getMapTypeId()].caption;
    captionElem.className = 'map-text';
    copyrightElem.innerHTML = 'Copyright ' + maps[map.getMapTypeId()].copyright;
    copyrightElem.className = 'map-text';
  });

  map.setMapTypeId('elevation');
}


/**
 * Builds a custom map type for Mars based on the provided parameters.
 * @param {Object} m JSON representing the map type options.
 * @return {google.maps.ImageMapType} .
 */
function makeMarsMapType(m) {
  var opts = {
    baseUrl: 'https://' + m.location + '/',
    getTileUrl: function(tile, zoom) {
      var bound = Math.pow(2, zoom);
      var x = tile.x;
      var y = tile.y;

      // Don't repeat across y-axis (vertically).
      if (y < 0 || y >= bound) {
        return null;
      }

      // Repeat across x-axis.
      if (x < 0 || x >= bound) {
        x = (x % bound + bound) % bound;
      }

      var qstr = 't';
      for (var z = 0; z < zoom; z++) {
        bound = bound / 2;
        if (y < bound) {
          if (x < bound) {
            qstr += 'q';
          } else {
            qstr += 'r';
            x -= bound;
          }
        } else {
          if (x < bound) {
            qstr += 't';
            y -= bound;
          } else {
            qstr += 's';
            x -= bound;
            y -= bound;
          }
        }
      }
      return 'https://' + m.location + '/' + qstr + '.jpg';
    },
    tileSize: new google.maps.Size(256, 256),
    maxZoom: m.zoomlevels - 1,
    minZoom: 0,
    name: m.name.charAt(0).toUpperCase() + m.name.substr(1)
  };

  return new google.maps.ImageMapType(opts);
}