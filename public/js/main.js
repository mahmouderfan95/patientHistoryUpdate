
// language Button

$(document).ready(function(){
    $(".toggle_container").hide();
    $("button.Lang").click(function(){
        $(this).toggleClass("active").next().slideToggle("faast");

        if ($.trim($(this).text()) === 'En') {
            $(this).text('Ar');
        } else {
            $(this).text('En');
        }

        return false;
    });
    });


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});


$(document).ready(function() {
    $("input[name$='colonscopy']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#types" + test).show();
    });
});
$(document).ready(function() {
    $("input[name$='mammogram']").click(function() {
        var test = $(this).val();

        $("div.des").hide();
        $("#type" + test).show();
    });
});
$(document).ready(function() {
    $("input[name$='prc']").click(function() {
        var test = $(this).val();

        $("div.dese").hide();
        $("#prct" + test).show();
    });
});


/* img */
$(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});


/* selector */
window.onload = function(){
    $('.ui.dropdown').dropdown();
};
    $('.label.ui.dropdown')
  .dropdown();

$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})

/*radio*/
$('.ui.radio.checkbox')
  .checkbox()
;
/*checkBox*/
$('.ui.checkbox')
  .checkbox()
;

/* toggle Edit */
document.querySelectorAll(".toggle__button").forEach(function(toggleButton) {
    this.addEventListener("click", handleClickEvent, false);
  });

  function handleClickEvent(evt) {
    let el = evt.target;

    if (el.getAttribute("aria-checked") == "true") {
        el.setAttribute("aria-checked", "false");
    } else {
        el.setAttribute("aria-checked", "true");
    }
}

/* password validation */
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
//   var numbers = /[0-9]/g;
//   if(myInput.value.match(numbers)) {
//     number.classList.remove("invalid");
//     number.classList.add("valid");
//   } else {
//     number.classList.remove("valid");
//     number.classList.add("invalid");
//   }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}


/* password validation */


/* required input */
$("<span class = 'star'>*</span>").insertBefore(":input[required]");

/* custmize with jquery */

$(".star").css({
  "color":"red",
  "font-size":"20px",
  "position":"relative",
  "top":"8px"
});

/* required input */

/* online switch */ 


// function myFunction() {
//   // Get the checkbox
//   var myCheckBox = document.getElementById("myonoffswitch");
//       myCheckBox.attr("checked","checked");
//   // Get the output text
//   var checkboxVal = myCheckBox.value;

//   // If the checkbox is checked, display the output text
//   if (myCheckBox.checked == true){
//     checkboxVal = 1;
//   } else {
//     checkboxVal = 0
//   }
// }