import { Router } from "../interfaces/Router.js";

class RouterImpl implements Router {
    visiblePage: HTMLElement | null = null;
    readonly pages: HTMLCollection;

    constructor(pages: HTMLCollection){
        this.pages = pages;
    }

    public navigate(idName: string): void {
        let nodeToShow: number | null = null;

        for (let i = 0; i < this.pages.length; i++) {
            if (nodeToShow){
                this.hideHTMLElement(this.pages[i]);
            }
            else if (this.pages[i].id == idName){
                console.log(`navigated to #${idName}`);
                this.showHTMLElement(this.pages[i]);
                nodeToShow = i;
            }
        }

        if (nodeToShow){
            for (let i = nodeToShow - 1; i >= 0; i--) {
                this.hideHTMLElement(this.pages[i]);
            }
        }
    }

    private hideHTMLElement(element: Element): void {
        if (element.classList[element.classList.length - 1] != "hidden"){
            element.classList.add("hidden");
        }
    }

    private showHTMLElement(element: Element): void {
        if (element.classList[element.classList.length - 1] == "hidden"){
            element.classList.remove("hidden");
        }
    }
}

export { RouterImpl }