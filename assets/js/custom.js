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











/*
Java script function for page load is end here....
and
DB CRUD operation are begging from here...
*/


// Social Media Link Update
function upd(id) {
    var lnk = document.getElementById('links' + id).value;
    infor = "id=" + id + "&lnks=" + lnk;;
    $("#uuu"+id).html(""); 
        $.ajax({
        type: "POST", url: "upd/social.php", data: infor, cache: false, beforeSend: function () {
            $('#uuu'+id).html('<span class=""><i class="bi bi-file-slides"></i></span>');
        }, success: function (html) {
            $("#uuu"+id).html(html);
        }
    });
}


// Hero [home page]
function hero(id) {
    var pth = document.getElementById('pth' + id).value;
    var ten = document.getElementById('ten' + id).value;
    var tbn = document.getElementById('tbn' + id).value;
    var sten = document.getElementById('sten' + id).value;
    var stbn = document.getElementById('stbn' + id).value;
    var lnk = document.getElementById('lnk' + id).value;
    var st = document.getElementById('st' + id).checked;
    infor = "id=" + id + "&lnk=" + lnk + "&st=" + st +  "&ten=" + ten +  "&tbn=" + tbn +  "&sten=" + sten +  "&stbn=" + stbn +  "&pth=" + pth + "&act=upd";;
    // alert(infor);
    $("#heroupd" + id).html(""); 
        $.ajax({
        type: "POST", url: "upd/heroupd.php", data: infor, cache: false, beforeSend: function () {
            $('#heroupd'+id).html('<span class=""><i class="bi bi-file-slides"></i></span>');
        }, success: function (html) {
            $("#heroupd"+id).html(html);
        }
    });
}

function herodel(id) {
var pth = document.getElementById('pth' + id).value;
    infor = "id=" + id +  "&pth=" + pth + "&act=del" ;;
    // alert(infor);
    $("#heroupd" + id).html(""); 
        $.ajax({
        type: "POST", url: "upd/heroupd.php", data: infor, cache: false, beforeSend: function () {
            $('#heroupd'+id).html('<span class=""><i class="bi bi-file-slides"></i></span>');
        }, success: function (html) {
            $("#heroupd"+id).html(html);
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