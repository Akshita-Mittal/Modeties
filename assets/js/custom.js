$(document).ready(function(){       
   $('#signin').modal('show');
}); 

$(document).ready(function(){    
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
});


$(document).ready(function(){ 

	//file input preview
	function readURL(input) {
		if (input.files && input.files[0]) {
				var reader = new FileReader();            
				reader.onload = function (e) {
						$('.logoContainer img').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
		}
	}
	$("input:file").change(function(){
			readURL(this);
});
});


$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		});
	});

//$(document).ready(function(){
//        $('input[type="checkbox"]').click(function(){
//            if($(this).prop("checked") == true){
//                $("div#post-text").css("display", "block");
//            }
//            else if($(this).prop("checked") == false){
//                $("div#post-text").css("display", "none");
//            }
//        });   
//});

// $(document).click(function(event) {
//     $('.round').click(function(){
//     $("body").addClass('moddal-open');
//});    
//     $('div#post-text').on('hidden.bs.modal', function () {         
//     $("body").removeClass('moddal-open');
//});     
//});



$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});


function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="replies"><img src="assets/images/category-5.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});



function sFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myTabs");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
    
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


$(document).ready(function(){
		$('#signin').modal({
			backdrop: 'static'
		}); 
});























