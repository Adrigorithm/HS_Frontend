export interface Book {
    title: string;
    authors: Array<string>;
    image: string;
    pages: number;
    language: "EN" | "NL";
    description: string;
}