function home_manager() {
    $("#main-block").html(""); infor = "a";
    $.ajax({
        type: "POST", url: "home.php", data: infor, cache: false, beforeSend: function () { $('#main-block').html('<span class=""><i class="bi bi-disk-fill"></i></span>'); }, success: function (html) {
            $("#main-block").html(html);
        }
    });
}

function sliding_area() {
    $("#main-block").html(""); infor = "a";
    $.ajax({
        type: "POST", url: "slider.php", data: infor, cache: false, beforeSend: function () { $('#main-block').html('<span class=""><i class="bi bi-file-slides"></i></span>'); }, success: function (html) {
            $("#main-block").html(html);
        }
    });
}


// function home() {
	
// 		var course=document.getElementById("course").value;
// 		var infor="course="+course;
// 	$("#main-block").html( "" );.

// 	 $.ajax({
// 			type: "POST",
// 			url: "home.php",
// 			data: infor,
// 			cache: false,
// 			beforeSend: function () { 
// 				$('#main-block').html('<span class="mif-spinner3 mif-ani-pulse"></span>');
// 			},
// 			success: function(html) {    
// 				$("#main-block").html( html );
// 			}
// 		});
// }