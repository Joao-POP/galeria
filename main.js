console.log("Olá, Mundo!");

const uploadInput = document.getElementById("upload");
const uploadButton = document.getElementById("upload-button");
const uploadContainer = document.getElementById("container");

uploadInput.addEventListener("change", updateDialog);

function updateDialog() {
	const thumbnail = document.querySelector("#container img");
	
	if (thumbnail !== null) {
		uploadContainer.removeChild(thumbnail);
	}

	if (uploadInput.files.length === 0) {
		uploadButton.disabled = true;
	} else {
		const file = uploadInput.files[0];
		const img = document.createElement("img");
		
		img.src = URL.createObjectURL(file);
		img.alt = img.title = file.name;
		
		uploadContainer.appendChild(img);
		uploadButton.disabled = false;
	}
}