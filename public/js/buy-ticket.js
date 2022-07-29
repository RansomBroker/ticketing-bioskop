$("#select-cities").change(function () {
    console.log($(this).val());
    let filmId = $('#film-id').val();
    $.ajax({
        type: 'GET',
        url: '/get-playing-city/'+$(this).val()+'/'+filmId,
        data: {},
        async: false,
        success: function (data) {
            $("#list-theater").html('');
            // get unique theater id
            let uniqTheater = new Set();
            let uniqTheaterName = new Set();
            let uniqDate = new Set();
            data.forEach(function (i) {
                uniqTheater.add(i.theater_id)
                uniqTheaterName.add(i.theater.name);
                uniqDate.add(i.date)
            })

            // convert into array
            let theaterId =  Array.from(uniqTheater);
            let theaterName = Array.from(uniqTheaterName);
            let date = Array.from(uniqDate);
            console.log(date)
            // create list of theater
            theaterId.forEach(function (i, k) {
                $("#list-theater").append('<li class="mt-4 border-b-2 text-white" id="theater-list'+i+'"></li>')
                $("#theater-list"+i).append('<p class="uppercase mb-2 font-medium text-lg"href="#" id="theater'+i+'">'+theaterName[k]+'</p>')
                $("#theater"+i).append('<div id="date'+i+'">'+date[0]+'</div>')
                $("#theater-list"+i).append('<div class="w-full flex flex-wrap flex-row" id="time-list-container'+i+'"></div>')
            });

            theaterId.forEach(function (i, k) {
                data.forEach(function (j){
                    if (j.theater_id === i) {
                        $("#time-list-container"+i).append('<div class=" ml-1 mt-3 mb-3"><a class="bg-white px-2 py-1 rounded text-black" href="/seat-selection/'+j.id+'">'+j.start_time+'</a></div>')
                    }
                })
            })
        }
    })
})
