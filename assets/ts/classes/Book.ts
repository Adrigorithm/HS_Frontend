class BookDetails {
    readonly title: string;
    readonly authors: Array<string> | string;
    readonly image: string;
    readonly pages: number;
    readonly language: "EN" | "NL";
    readonly description: string;

    constructor(title: string, authors: Array<string>, image: string, pages: number, language: "EN" | "NL", description: string){
        this.title = title;
        this.authors = authors;
        this.image = image;
        this.pages = pages;
        this.language = language;
        this.description = description;
    }

    generateCard(): HTMLElement {
        let card = document.createElement("div");
        card.classList.add("flex", "flex-row", "lg:flex-col");

        let title = document.createElement("h4");
        Generator.setText(title, `${this.title}`);

        let image = document.createElement("img");
        image.setAttribute("src", this.getImageUri());
        image.setAttribute("alt", "image of bookcover")

        let author = document.createElement("h5");
        let authorText = Array.isArray(this.authors) 
            ? this.authors.join(", ")
            : this.authors;
        Generator.setText(author, `${authorText}`)

        let description = document.createElement("p");
        Generator.setText(description, `${this.description}`);

        card.append(title, image, author, description);

        return card;
    }

    getImageUri(): string {
        return `/assets/images/${this.image}`;
    }
}