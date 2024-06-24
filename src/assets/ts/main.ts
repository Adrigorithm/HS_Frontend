import { HttpClient } from "./classes/HttpClient.js";
import { RouterImpl } from "./classes/Router.js";
import { Book } from "./interfaces/Book.js";
import { Router } from "./interfaces/Router.js";

window.addEventListener("load", onLoad)

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

    const currentLocationId = location.hash.substring(1);
    
    if (currentLocationId)
        router.navigate(currentLocationId);

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

            if (imageElement)
                imageElement.src = URL.createObjectURL(imageBlob);
            else
                console.log(`No image element with alt ${imageUri} could be found, skipping...`);
        });
    });
}