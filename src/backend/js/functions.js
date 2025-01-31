// Function to handle video uploads
async function handleFormSubmit(event) {
  const form = document.getElementById("uploadForm");
  const loader = document.getElementById("loader");

  event.preventDefault();
  loader.style.display = "block";

  const formData = new FormData(form);

  try {
    const response = await fetch("backend/upload/", {
      method: "POST",
      body: formData,
    });

    loader.style.display = "none";

    if (response.ok) {
      const result = await response.text();
      alert(result.trim() ? result : "No response from server.");
    } else {
      throw new Error(`Upload failed with status: ${response.status}`);
    }
  } catch (error) {
    loader.style.display = "none";
    alert("Failed to upload video!");
  }
}
