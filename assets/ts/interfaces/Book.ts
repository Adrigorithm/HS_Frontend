interface Book {
    title: string;
    authors: Array<string> | string;
    image: string;
    pages: number;
    language: "EN" | "NL";
    description: string;

    generateCard(): HTMLElement;
}