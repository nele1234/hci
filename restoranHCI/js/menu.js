$('#menuSubmit').click(function () {
    var date = $('#date').val()
    var time = $('#time').val()
    var food = $('#food :selected').val()
    var foodNumber = $('#foodNumber').val()
    var drink = $('#drink :selected').val()
    var drinkNumber = $('#drinkNumber').val()
    var cardNumber = $('#cardNumber').val()

    console.log(food)
    if (date == "") {
        alert("Please select date")
    } else if(time == ""){
        alert("Please enter time")
    } else if(food == -1){
        alert("Please select a food type")
    } else if(foodNumber == "" || foodNumber == 0){
        alert("Please enter a food quantity")
    } else if(drink == -1){
        alert("Please select a drink type")
    } else if(drinkNumber == "" || drinkNumber == 0){
        alert("Please enter a drink quantity")
    } else if(cardNumber == ""){
        alert("Please enter card number")
    } else {
        /* AJAX */
        alert("Your order sent!")
    }
}) 

function foodPrice() {
    var food = $('#food :selected').val()
    var foodNumber = $('#foodNumber').val()

    if(foodNumber < 1){
        alert("The min quantity of food is 1")
        return;
    }
    if(food == -1){
        alert("Please select food type")
        return
    }

    if(food == 1){
        var foodPrice = foodNumber * 3
        $('#foodPrice').val(foodPrice)
        return
    }else if(food == 2){
        var foodPrice = foodNumber * 5
        $('#foodPrice').val(foodPrice)
        return
    }else if(food == 3){
        var foodPrice = foodNumber * 7
        $('#foodPrice').val(foodPrice)
        return
    }else if(food == 4){
        var foodPrice = foodNumber * 10
        $('#foodPrice').val(foodPrice)
        return
    }


}

function drinkPrice() {
    var drink = $('#drink :selected').val()
    var drinkNumber = $('#drinkNumber').val()


    if(drinkNumber < 1){
        alert("Min quantity of drink is 1")
        return
    }
    if(drink == -1){
        alert("Please select drink type")
        return
    }

    if(drink == 1){
        var drinkPrice = drinkNumber * 2
        $('#drinkPrice').val(drinkPrice)
        return
    }else if(drink == 2){
        var drinkPrice = drinkNumber * 5
        $('#drinkPrice').val(drinkPrice)
        return
    }else if(drink == 3){
        var drinkPrice = drinkPrice * 3
        $('#drinkPrice').val(drinkPrice)
        return
    }else if(drink == 4){
        var drinkPrice = drinkPrice * 2
        $('#drinkPrice').val(drinkPrice)
        return
    }

}

function totalPrice(){
    var foodTotalPrice = $('#foodPrice').val()
    var drinkTotalPrice = $('#drinkPrice').val()

    var totalPrice = parseInt(foodTotalPrice) + parseInt(drinkTotalPrice)
    $('#totalPrice').val(totalPrice)
}