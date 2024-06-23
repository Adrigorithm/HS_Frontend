export interface Router {
    pages: HTMLCollection;
    navigate(idName: string): void;
}