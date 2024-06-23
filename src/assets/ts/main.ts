import { HttpClient } from "./classes/HttpClient";
import { RouterImpl } from "./classes/Router";
import { Book } from "./interfaces/Book";
import { Router } from "./interfaces/Router"

window.addEventListener("onload", onLoad)

let router: Router;

function onLoad(): void {
    router = setupRouter();
}

function setupRouter(): Router {
    const pages = document.getElementsByClassName("page");
    router = new RouterImpl(pages);
    window.addEventListener("hashchange", () => {
        router.navigate(location.hash.substring(1));
    })
    router.navigate(location.hash.substring(1));

    return router;
}

async function setupBooks() {
    HttpClient.get<Array<Book>>("assets/data/books.json").then((books) => {
        console.log(books);
    });
}

/**
 * 
 * @param images A list of the names of the images, without the file extension. The full path is processed within the method.
 */
async function lazyLoadImages(... images: Array<string>) {
    images.forEach(imageUri => {
        HttpClient.getBlob(`assets/images/${imageUri}.webp`).then((imageBlob) => {
            let imageElement: HTMLImageElement | null = document.querySelector(`img[alt="${imageUri}"]`);

            if (imageElement) {
                imageElement.src = URL.createObjectURL(imageBlob);
            } else {
                console.log(`No image element with alt ${imageUri} could be found, skipping...`);
            }
        });
    });
}