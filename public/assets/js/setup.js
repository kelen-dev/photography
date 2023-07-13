function myFunction(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("expandedImg");
    // Get the image text
    var imgText = document.getElementById("imgtext");

    var closeButton = document.getElementsByClassName("closebtn");
    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
    // Use the value of the alt attribute of the clickable image as text inside the expanded image
    imgText.innerHTML = imgs.alt;

    closeButton.innerHTML = imgs.display;
    // Show the container element (hidden with CSS)
    expandImg.parentElement.style.display = "block";
}
