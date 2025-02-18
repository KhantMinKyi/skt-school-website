function adjustHeight() {
    let video = document.querySelector("#home video");
    let homeSection = document.querySelector("#home");
    if (video) {
        homeSection.style.height = video.clientHeight + "px";
        console.log(video.clientHeight);
    }
}

// Adjust on load and resize
window.addEventListener("load", adjustHeight);
window.addEventListener("resize", adjustHeight);
