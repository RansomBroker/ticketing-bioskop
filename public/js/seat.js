$(function() {
    let num = 1;
    let currSeat = 0;
    let seatList = [];
    let basePrice = parseInt($('#get-price').val());
    let nextPrice = 0;
    let textPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0  }).format(nextPrice)
    // selected
    $(document).on('click', '.seat', function() {
        if (num <= 8) {
            $("#detail-order").show();
            let seatNum = $(this).attr("id");
            seatList.push(parseInt(seatNum));
            $(this).removeClass("bg-[#34c218]");
            $(this).removeClass("seat");
            $(this).addClass("bg-[#CCB443]")
            $(this).addClass("seat-selected");
            nextPrice += basePrice;
            num++;
            $("#seat-chose").val(seatList);
            $("#set-price").val(nextPrice);
            textPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0  }).format(nextPrice)
            $("#seat-total").text(seatList.length);
            $("#seat-number").text(seatList);
            $("#sub-total").text(textPrice);
        }
    })

    // unselected
    $(document).on('click', '.seat-selected', function () {
        let seatNum = $(this).attr("id");
        const index = seatList.indexOf(parseInt(seatNum));
        if (index > -1) { // only splice array when item is found
            seatList.splice(index, 1); // 2nd parameter means remove one item only
        }
        $(this).removeClass("bg-[#CCB443]")
        $(this).removeClass("seat-selected")
        $(this).addClass("seat");
        $(this).addClass("bg-[#34c218]");
        nextPrice -= basePrice
        num--;
        $("#set-price").val(nextPrice)
        $("#seat-chose").val(seatList);
        textPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0  }).format(nextPrice)
        $("#seat-total").text(seatList.length);
        $("#seat-number").text(seatList);
        $("#sub-total").text(textPrice);
    })


});
