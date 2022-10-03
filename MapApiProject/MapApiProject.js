
async function getData()  {
    return  fetch('http://localhost/MapApiProject/MapApiProject.php?account_id=0016e00002zuFq9AAE')
        .then((response) => response.json())
        .then((data) => {
            // console.log(data)
            return data;
        });
}

    // Create the script tag, set the appropriate attributes

    let script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDjO8Ud-xcHlMlyyMPrpbJzbo2g79nbvyo&callback=initMap';
    script.async = true;

window.initMap =async function() {
    let data = await getData();
    let map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: {lat: 32.8910588, lng: -117.1986177},
    });
    console.log(data);
    let myLatLng;
    for (let loop_counter = 0; loop_counter < data['PropertiesPage'].length; loop_counter++) {
        // console.log(data['PropertiesPage'][loop_counter]['Latitude__c']);
        myLatLng = {
            lat: data['PropertiesPage'][loop_counter]['Latitude__c'],
            lng: data['PropertiesPage'][loop_counter]['Longitude__c']
        };

        let marker = new google.maps.Marker({
            position: myLatLng,
            map,
            title: data['PropertiesPage'][loop_counter]['Display_Address__c'],
            icon: "https://chart.apis.google.com/chart?chst=d_map_pin_icon&chld=dollar|FFFF00"
        });
        let address = data['PropertiesPage'][loop_counter]['Display_Address__c'];
        let addressURL = 'http://maps.googleapis.com/maps/api/streetview?size=600x400&key=AIzaSyDjO8Ud-xcHlMlyyMPrpbJzbo2g79nbvyo&location=' + address;
        let StreetView = '<img src= "' + addressURL + '" alt="not found">';

        const infowindow = new google.maps.InfoWindow({
            content: StreetView,
        });
    }
}

document.head.appendChild(script);

    // function bindInfoWindow(marker, mapOrStreetViewObject, infoWindowObject, html) {
    //     google.maps.event.addEventListener(marker, 'click', function() {
    //         infoWindowObject.setContent(html);
    //         infoWindowObject.open(mapOrStreetViewObject, marker);
    //     });
    // }
    //
    // bindInfoWindow(marker , );

        // The InfoWindow for the map view
//         let mapInfoWindow = new google.maps.InfoWindow({
//             content: "foo",
//             position: myLatLng// refer to step #2
//         });
//
// // The InfoWindow for the street view
//         let  streetViewPanoramaInfoWindow = new google.maps.InfoWindow({
//             content: "bar",
//             position: myLatLng, // refer to step #2
//             disableAutoPan: true // optional but helpful
//         });
//
// // The click event handler for the marker
//         marker.addEventListener()('click', function() {
//             let streetViewPanorama = map.getStreetView();

            // // when streetview was engaged
            // if(streetViewPanorama.getVisible()===true) {
            //     streetViewPanoramaInfoWindow.open(streetViewPanorama); // refer to step #3
            // }
            // // when normal aerial view was engaged
            // else {
            //     mapInfoWindow.open(map); // refer to step #3
            // }


        //
        // const panorama = new google.maps.StreetViewPanorama(
        //     document.getElementById("pano"),
        //     {
        //         position: myLatLng,
        //
        //     }
        // );
        //
        //
        // marker.addEventListener()("click", () => {
        //     map.setStreetView(panorama);
        // });


        //
        // const sv = new google.maps.StreetViewService();
        //
        // panorama = new google.maps.StreetViewPanorama(
        //     document.getElementById("pano")
        // );

// Append the 'script' element to 'head'
