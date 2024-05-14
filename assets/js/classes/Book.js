"use strict";
class BookDetails {
    constructor(title, authors, image, pages, language, description) {
        this.title = title;
        this.authors = authors;
        this.image = image;
        this.pages = pages;
        this.language = language;
        this.description = description;
    }
    generateCard() {
        let card = document.createElement("div");
        card.classList.add("flex", "flex-row", "lg:flex-col");
        let title = document.createElement("h4");
        Generator.setText(title, `${this.title}`);
        let image = document.createElement("img");
        image.setAttribute("src", `${this.image}`);
        image.setAttribute("alt", "image of bookcover");
        let author = document.createElement("h5");
        let authorText = Array.isArray(this.authors)
            ? this.authors.join(", ")
            : this.authors;
        Generator.setText(author, `${authorText}`);
        let description = document.createElement("p");
        Generator.setText(description, `${this.description}`);
        card.append(title, image, author, description);
        return card;
    }
}
