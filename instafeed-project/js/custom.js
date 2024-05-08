$(document).ready(function() {
    var userFeed = new Instafeed({
        //get: 'user',
        //userId: '637773641',
        limit: 12,
        //resolution: 'standard_resolution',
        //accessToken: '637773641.2a46ab3.6bc0765686f145a7bf0d0681cef947c7',
        accessToken: 'IGQVJXSy1tMVRjMmxzaEppaVpKOFdDWGJaNmJiU3BLaXF3NklHa3B5cDVETENsVjhMZAkRUeGdiVjhSNkZAmTzF3Mjd1SGZAscENndUd1bk03UmR6MURSU2FUeTdNS0FwTEVwcGxsTGVYa2cyeWdXRG1LegZDZD',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });
    userFeed.run();  
    // This will create a single gallery from all elements that have class "gallery-item"
    // $('.gallery').magnificPopup({
    //     type: 'image',
    //     delegate: 'a',
    //     gallery: {
    //         enabled: true
    //     }
    // });
});