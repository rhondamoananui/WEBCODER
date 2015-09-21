/*

---------------------------------------------------   BOOKING FORM  ------------------------------------------------------------------




form has fieldsets for 
    1st drop down
        some options have class="calculateMe" or something to make them identifiable
    calculator
    comment box
    personal details

1) 
    A) if calculateMe has been clicked  - add event listener to 'select .calculateMe) which makes fieldset id="calculator" display:block
        grab it's value    this.value


        calculator does its thing


    B) if one of the other options is selected
            make the comment box appear

2) When the personal details legend is clicked
        make the personal details fieldset display:block
            make the other fieldsets display:none

3) Send button


document.querySelector('select').addEventListener('change',function(){
    //if this.className==calculateMe){
        fieldset calculator display block
        comment  display:none
    }else{
        fieldset comment display:block
        calcaulateMe display:none
    }
});

if(calculateMe is visible){
    do the calculation
     document.querySelector(people).addEventListerner('change'function(){
        var numPeople =  this.value
    });
     document.querySelector(dration).addEventListerner('change'function(){
        var duration =  this.value
    })
    var price = value from the select list
    var total = numpeople*duration*price

innerHTML to display total

}

*/ 


  //---------------------------- EVENT LISTENERS -------------------------------------

// when the page is loaded, hide all fieldsets except the first one
$(window).load(function(){
    $('#comment').css('display', 'none');
    $('#sum').css('display', 'none');
    $('#personal').css('display', 'none');
    $('#calculate').css('display', 'none');
    $('#confirmationMessage').css('display', 'none');

});


//------------ DROP DOWN SELECTOR
$(document).ready(function(){
//GLOBAL VARIABLES
    var calculate = $('#calculate');
    var comment = $('#comment');
    var personal = $('#personal');
    

    // if(document.querySelector('#flights select')){
    $('#flights select').change(function() {
        var currOptionIndex = $('select option:selected').index();

            //console.log(currOptionIndex);
            if (currOptionIndex<=3){ 

                calculate.css('display','block');
                //console.log(calculate);
                comment.css('display','none');
                personal.css('display','none');

            }else{
                comment.css('display','block');
                calculate.css('display','none');
                personal.css('display','none');
            };

            whichAdventure();
            

    });

    //  when a new value is selected, re calculate
    // on change run the following functions
    $('form').change(function(){
        howManyPeople();
        howLong();
        calculator();
    });


    // clear the previous sum 
    $('#totalOfEquation').on('blur', function(self){
        clearPreviousSum();
    }); 


    function whichAdventure(){

        adValue = 1;

        adValue = document.querySelector('select[name="adventure"]').value;
        console.log(parseFloat(adValue));
        return parseFloat(adValue);
        
    };

   function howManyPeople(){
    // loop through all the quantity inputs
        var quantity = document.querySelectorAll('input[name="people"]');

        var arrayOfQuantity = Array.prototype.slice.call(quantity);



        for(var n=0; n<arrayOfQuantity.length; n++){

            // loop through inputs
            //find if input is checked, 
            //if checked = true
            //find its value 

            var QuantityRadio = arrayOfQuantity[n];

            

            if (QuantityRadio.checked==true){

                var SelectedQuantityValue = parseFloat(QuantityRadio.value);

                //console.log(SelectedQuantityValue);

            };
            

        };
        return SelectedQuantityValue;
    };

    function howLong(){

        // loop through all the duration inputs

        var duration = document.querySelectorAll('input[name="duration"]');

        var arrayOfDuration = Array.prototype.slice.call(duration);

        for(var i=0; i<arrayOfDuration.length; i++){

             // loop through array

            //find a checked input, use its value in the booking calculator

            var DurationRadio = arrayOfDuration[i];


            if (DurationRadio.checked==true){//if 

                var SelectedDurationValue = parseFloat(DurationRadio.value);

                //console.log(SelectedDurationValue);

            };

        };
        return SelectedDurationValue;
    };

//---------------------------- CALCULATE -------------------------------------

    function calculator(){
        var total = parseInt(howLong()* howManyPeople()* whichAdventure());
        var sum = $('#sum'); //fieldset sum
           
            if(total>1){
                sum.css('display','block');
                $("#totalOfEquation").html("<b>The Total Cost will be $"+total+"</b>");

            }else{
                sum.css('display','none');
            }
        return total;
    };

    






//---------------------------- WINDOW ONLOAD EVENT-------------------------------------


//window.onload.getElementById('calculate','sum','comment').style.display="none";

// // when the page is loaded, hide all fieldsets except the first one
// $(window).onload(function(){
//     hideComment = $('#comment').css('display:none');
//     hideSum = $('#sum').css('display:none');
//     hidePersonal = $('#personal').css('display:none');
//     hideCalculate = $('#calculate').css('display:none');
//     hideConfirmationMessage = $('#confirmationMessage').css('display:none');

// });

//  if (window.addEventListener('load')){

//     window.addEventListener('load', function(self){
//         var hideComment = document.getElementById('comment');
//         var hideSum = document.getElementById('sum');
//         var hidePersonal = document.getElementById('personal');
//         var hideCalculate = document.getElementById('calculate');
//         var hideConfirmationMessage = document.getElementById('confirmationMessage');
        
//         hideComment.style.display="none";
//         hideSum.style.display="none";
//         hidePersonal.style.display="none";
//         hideCalculate.style.display="none";
//         hideConfirmationMessage.style.display="none";
//     });
// }
//---------------------------- BOOKING BUTTON EVENT-------------------------------------


    // when button-sum is clicked, hide all fieldsets, except the personal

    $('#button-sum').click(function(self){
        //alert( "Handler for .click() called." );
        $('#sum').css('display', 'none');
        $('#personal').css('display', 'block');;
        $('#comment').css('display', 'none');
        
        $('#calculate').css('display', 'none');
        $('#confirmationMessage').css('display', 'none');
        $('#flights').css('display', 'none');
    });

    // function sumField(){
    //     var sumFieldset = $('#sum');
    //     return sumFieldset;
    // };




// //when booking button is clicked, hide fieldsets a,b,c,d - show fieldset e
// if (document.getElementById('button-sum')){
//     document.getElementById('button-sum').addEventListener('click', function(self){
        
//         var hideComment = document.getElementById('comment');
//         var hideSum = document.getElementById('sum');
//         var hideCalculate = document.getElementById('calculate'); 
//         var hideSelect = document.getElementById('flights');
//         var hideConfirmationMessage = document.getElementById('confirmationMessage');
//         var showPersonal = document.getElementById('personal');

//         hideSelect.style.display="none";
//         hideComment.style.display="none";
//         hideSum.style.display="none";
//         hideCalculate.style.display="none";
//         showPersonal.style.display="block"; // Show this fieldset
//         hideConfirmationMessage.style.display="none"
//     });



//} //end document.getElementById('button-sum')

//----------------------------------- FORM NAME-validation  --------------------------------------

if (document.querySelector('input[name="name"]')){
document.querySelector('input[name="name"]').addEventListener('blur', function(){
        var name = document.querySelector('input[name="name"]');
        

    if ( checkHasChar(name) ) {
        sumField().style.display="none";  
        if ( lettersWithSpaces(name.value) ) {
            success(this);
        } else {
            lettersOnly(this);
        }

    } else {
      fail(this);
    }

});  
} //end document.querySelector('input[name="name"]')
//----------------------------------- FORM PHONE-validation --------------------------------------

if (document.querySelector('input[name="number"]')){
    document.querySelector('input[name="number"]').addEventListener('blur', function(){
        var phone = document.querySelector('input[name="number"]');
        
        if ( checkHasChar(phone) ) {
            sumField().style.display="none"; 
            if ( numberCheck(phone.value) ) {
                success(this);
            } else {
                numOnly(this);
            }

        } else {
          fail(this);
        }

    });
    } //end document.querySelector('input[name="number"]')
 //----------------------------------- FORM EMAIL-validation --------------------------------------

 if (document.querySelector('input[name="email"]')){
    document.querySelector('input[name="email"]').addEventListener('blur', function(){
        var email = document.querySelector('input[name="email"]');

        if ( checkHasChar(email) ) {
            sumField().style.display="none";  
            if ( validEmail(email.value) ) {
                success(this);
            } else {
            lettersOnly(this);
            }

        } else {
            fail(this);
        }

    });  
} // end document.querySelector('input[name="email"]')

//---------------------------VALIDATION FUNCTIONS & REGEX -------------------------------------------

function checkHasChar (obj) {
    return obj.value.length>0;
};
function lettersWithSpaces (value) {
    var rexAlphOnly = /^[A-Za-z\s]+$/;
    return rexAlphOnly.test(value);
}

function lettersOnly (obj) {
    obj.nextElementSibling.className = "fail";
    obj.nextElementSibling.innerText = lettersOnlyMsg; 
}

function fail (obj) {
    obj.nextElementSibling.className = "fail";
    obj.nextElementSibling.innerText = failMsg;
}

function success (obj) {
    obj.nextElementSibling.className = "success";
    obj.nextElementSibling.innerHTML = successMsg;
}
function success1 (obj) {
    obj.nextElementSibling.className = "success";
    obj.nextElementSibling.innerHTML = formSubmitted;
}

function numberCheck (value) {
    var rexNumOnly = /^\S[0-9\s]+$/;
    return rexNumOnly.test(value);
}
function numOnly (obj) {
    obj.nextElementSibling.className = "fail";
    obj.nextElementSibling.innerText = numOnlyMsg;
}
function validEmail (value) {
    var rexEmailOnly = /^([1-zA-Z0-1@.\s]{1,255})$/;
    return rexEmailOnly.test(value);
}
function emailOnly (obj) {
    obj.nextElementSibling.className = "fail";
    obj.nextElementSibling.innerText = emailOnlyMsg; 
}



//---------------------------VALIDATION MESSAGES-------------------------------------------


successMsg = '&#10004;';
lettersOnlyMsg = 'Enter your Name';
numOnlyMsg = 'Enter Valid Phone Number';
failMsg = 'Required';
emailOnlyMsg = 'Enter Valid Email';
formSubmitted = '  Thank you, your form has successfully been submitted, you will hear from us soon';


//---------------------------SEND MESSAGE EVENT-------------------------------------------


    // when button-sum is clicked, hide all fieldsets, except the personal
    $('#button-next').click(function(){
        $('#personal').css('display', 'block');;
        $('#comment').css('display', 'none');
        $('#sum').css('display', 'none');
        $('#calculate').css('display', 'none');
        $('#confirmationMessage').css('display', 'none');
        $('#flights').css('display', 'none');

    });


    //---------------------------SUBMIT EVENT-------------------------------------------

    $('#button-submit').click(function(){
        //$('#button-submit').action('mailto:rhonda29@vodafone.co.nz');
        $('#comment').css('display', 'none');
        $('#sum').css('display', 'none');
        $('#personal').css('display', 'none');
        $('#calculate').css('display', 'none');
        $('#confirmationMessage').css('display', 'block');
        $('#flights').css('display', 'none');
    });



}); //end of jQuery