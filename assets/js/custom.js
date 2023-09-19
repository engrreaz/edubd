function home_manager() {

        // document.getElementById("main-block").innerHTML = "Ubuntu";
        $("#main-block").html(""); infor = "a";
        $.ajax({
            type: "POST", url: "home.php", data: infor, cache: false, beforeSend: function () { $('#main-block').html('<span class=""><i class="bi bi-mortarboard-fill"></i></span>'); }, success: function (html) {
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