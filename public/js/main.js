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


