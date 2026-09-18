console.log("Olá, Mundo!");

const imageUpload = document.getElementById("image-upload");
const uploadButton = document.getElementById("upload-button");
const uploadContainer = document.getElementById("container");

imageUpload.addEventListener("change", updateUploadWindow);

function updateUploadWindow() {
	const thumbnail = document.getElementById("image-preview");
	
	if (thumbnail.classList.get("placeholder") !== null) {
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