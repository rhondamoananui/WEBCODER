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

//------------ DROP DOWN SELECTOR

// if(document.querySelector('#flights select')){
    document.querySelector('#flights select').addEventListener('change', function(self){  


        var calculate = document.getElementById('calculate'); //fieldset calculate

        var comment = document.getElementById('comment'); // fieldset comment

        var personal = document.getElementById('personal'); //fieldset personal


        // find the currently selected option


        var currOptionIndex = this.options.selectedIndex;

        if (currOptionIndex<=3){ 

            calculate.style.display='block';

            comment.style.display='none';

            personal.style.display='none';


        }else{
            comment.style.display='block';
            calculate.style.display='none';
            personal.style.display='none';
        };
        whichAdventure();
    }); 
//} // end flight selector

if (document.querySelector('form')){
// -------------- HOW MANY PEOPLE
document.querySelector('form').addEventListener('change', function(self){
    howManyPeople();

});

// -------------- HOW LONG
document.querySelector('form').addEventListener('change', function(self){
    howLong();

});

// -------------- CALCULATE
document.querySelector('form').addEventListener('change', function(self){
    calculate();
}); 
}// end document.querySelector('form')

// -------------- CLEAR CALCULATOR
if (document.getElementById('totalOfEquation')){
    document.getElementById('totalOfEquation').addEventListener('blur', function(self){
        clearPreviousSum();
    }); 
} // end of document.getElementById('totalOfEquation')

//---------------------------- WHICH ADVENTURE -------------------------------------


function whichAdventure(){

    adValue = 1;

    adValue = document.querySelector('select[name="adventure"]').value;
    //console.log(parseFloat(adValue));
    return adValue;
    
};


//---------------------------- HOW MANY PEOPLE  -------------------------------------

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

            console.log(SelectedQuantityValue);

        };
        

    };
    return SelectedQuantityValue;
};



//---------------------------- HOW LONG  -------------------------------------


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

            console.log(SelectedDurationValue);

        };

    };
    return SelectedDurationValue;
};

//---------------------------- CALCULATE -------------------------------------

function calculate(){
    var durationValue = howLong();
    var peopleValue = howManyPeople();
    var adventureValue = whichAdventure();
    var total1 = durationValue * peopleValue * adventureValue;
    var total = parseInt(total1);

    var sum = document.getElementById('sum'); //fieldset sum
    var calculate = document.getElementById('calculate'); //fieldset calculate
    // put thie total into where ever you wanted to display it.
    if(total>1){
        sum.style.display="block";
        document.getElementById("totalOfEquation").innerHTML="<b>The Total Cost will be $"+total+"</b>";
    }else{
        sum.style.display="none";

    };

    // document.getElementById('calcTotal').innerHTML="<b>Great!  Your booking will cost $"+total+"</b>";
    return total;
}


//---------------------------- WINDOW ONLOAD EVENT-------------------------------------


// window.onload.getElementById('calculate','sum','comment').style.display="none";

// if (window.addEventListener('load')){

    window.addEventListener('load', function(self){
        var hideComment = document.getElementById('comment');
        var hideSum = document.getElementById('sum');
        var hidePersonal = document.getElementById('personal');
        var hideCalculate = document.getElementById('calculate');
        var hideConfirmationMessage = document.getElementById('confirmationMessage');
        
        hideComment.style.display="none";
        hideSum.style.display="none";
        hidePersonal.style.display="none";
        hideCalculate.style.display="none";
        hideConfirmationMessage.style.display="none";
    });
// }
//---------------------------- BOOKING BUTTON EVENT-------------------------------------

//when booking button is clicked, hide fieldsets a,b,c,d - show fieldset e
//if (document.getElementById('button-sum')){
    document.getElementById('button-sum').addEventListener('click', function(self){
        
        var hideComment = document.getElementById('comment');
        var hideSum = document.getElementById('sum');
        var hideCalculate = document.getElementById('calculate'); 
        var hideSelect = document.getElementById('flights');
        var hideConfirmationMessage = document.getElementById('confirmationMessage');
        var showPersonal = document.getElementById('personal');

        hideSelect.style.display="none";
        hideComment.style.display="none";
        hideSum.style.display="none";
        hideCalculate.style.display="none";
        showPersonal.style.display="block";
        hideConfirmationMessage.style.display="none"
    });


    function sumField(){
        var sumFieldset = document.getElementById('sum');
        return sumFieldset;
    };
//} //end document.getElementById('button-sum')

//----------------------------------- FORM NAME-validation  --------------------------------------

//if (document.querySelector('input[name="name"]')){
    document.querySelector('input[name="name"]').addEventListener('blur', function(){
        var name = document.querySelector('input[name="name"]');
        

        if ( checkHasChar(name) ) {
          sumField().style.display="none";  
          if ( lettersWithSpaces(name.value) ) {
            success(this);
        } else {
            lettersOnly(this);
        };

    } else {
      fail(this);
  };

});  
//} //end document.querySelector('input[name="name"]')
//----------------------------------- FORM PHONE-validation --------------------------------------

//if (document.querySelector('input[name="number"]')){
    document.querySelector('input[name="number"]').addEventListener('blur', function(){
        var phone = document.querySelector('input[name="number"]');
        
        if ( checkHasChar(phone) ) {
            sumField().style.display="none"; 
            if ( numberCheck(phone.value) ) {
                success(this);
            } else {
                numOnly(this);
            };

        } else {
          fail(this);
      };

  });
//} //end document.querySelector('input[name="number"]')
 //----------------------------------- FORM EMAIL-validation --------------------------------------

 //if (document.querySelector('input[name="email"]')){
    document.querySelector('input[name="email"]').addEventListener('blur', function(){
        var email = document.querySelector('input[name="email"]');

        if ( checkHasChar(email) ) {
          sumField().style.display="none";  
          if ( validEmail(email.value) ) {
            success(this);
        } else {
            lettersOnly(this);
        };

    } else {
      fail(this);
  };

});  
//} // end document.querySelector('input[name="email"]')

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


//if (document.getElementById('button-next')){
    document.getElementById('button-next').addEventListener('click', function(){
        var hideComment = document.getElementById('comment');
        var hideSum = document.getElementById('sum');
        var hideCalculate = document.getElementById('calculate'); 
        var hideSelect = document.getElementById('flights');
        var hideConfirmationMessage = document.getElementById('confirmationMessage');
        var showPersonal = document.getElementById('personal');

        hideSelect.style.display="none";
        hideComment.style.display="none";
        hideSum.style.display="none";
        hideCalculate.style.display="none";
        showPersonal.style.display="block";
        hideConfirmationMessage.style.display="none"
    });
//} // end document.getElementById('button-next')
    //---------------------------SUBMIT EVENT-------------------------------------------

//    if (document.getElementById('button-submit')){
        document.getElementById('button-submit').addEventListener('click', function(){
            document.getElementById('button-submit').style.action="mailto:rhonda29@vodafone.co.nz";

            var hideConfirmationMessage = document.getElementById('confirmationMessage');
            var showPersonal = document.getElementById('personal');
            hideConfirmationMessage.style.display="block";
            showPersonal.style.display="none";
        });
 //   }

