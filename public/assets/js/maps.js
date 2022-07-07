function initMap(){

    var optionsGuatemala = {
        center: {lat: 14.6214572, lng: -90.5349703},
        zoom: 18
    }

    var optionsSanLucas = {
        center: {lat: 14.6021102, lng: -90.6456987},
        zoom: 18
    }

    var optionsSacala = {
        center: {lat: 14.7667859, lng: -90.8249932},
        zoom: 18
    }

    var optionsTioxya = {
        center: {lat: 14.772547, lng: -90.740746},
        zoom: 18
    }

    var optionsYepocapa = {
        center: {lat: 14.5011078, lng: -90.9564357},
        zoom: 18
    }
   

    map = new google.maps.Map(document.getElementById('mapGuatemala'),optionsGuatemala);
    map2 = new google.maps.Map(document.getElementById('mapSanLucas'),optionsSanLucas);
    map3 = new google.maps.Map(document.getElementById('mapSacala'),optionsSacala);
    map4 = new google.maps.Map(document.getElementById('mapTioxya'),optionsTioxya);
    map5 = new google.maps.Map(document.getElementById('mapYepocapa'),optionsYepocapa);
}