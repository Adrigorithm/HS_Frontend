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
}

async function setupBooks() {
    HttpClient.get<Array<Book>>("assets/data/books.json").then((books) => {
        console.log(books);
    });
}