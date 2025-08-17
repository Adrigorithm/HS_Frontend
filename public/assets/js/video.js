"use strict"

let videos = document.getElementsByClassName("video-custom-controls");

for (let video of videos) {
    let videoPlayer = video.children[0];
    let buttons = video.children[video.children.length - 1].children;
    let pauseButton = buttons[0];
    let playButton = buttons[1];

    pauseButton.addEventListener("click", () => {
        pauseButton.classList.add("hidden");
        playButton.classList.remove("hidden");
        videoPlayer.classList.add("grayscale-50", "blur-[2px]");

        videoPlayer.pause();
    });

    playButton.addEventListener("click", () => {
        playButton.classList.add("hidden");
        pauseButton.classList.remove("hidden");
        videoPlayer.classList.remove("grayscale-50", "blur-[2px]");

        videoPlayer.play();
    });
}
