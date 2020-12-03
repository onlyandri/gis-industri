// AJAX Modal Tambah menu
function addMenu(){
    $("MenuModalLabel").html("Tambah Menu Baru");
    $(".modal-footer button[type=submit]").html("Add");
    $(".modal-content form").attr("action", "http://localhost/ingis/menu");
    $(".modal-content form")[0].reset();
    $(".modal-content form").validate().resetForm();
}

function profile() {
	let fileName = $("input[type=file]").val().split("\\").pop();
	$("input[type=file]")
		.next(".custom-file-label")
		.addClass("selected")
		.html(fileName);
	// let file = $("input[type=file]").files[0];
	// console.log(file);
}