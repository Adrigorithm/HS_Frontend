class RouterImpl {
    visiblePage: HTMLElement | null = null;
    readonly pages: Array<HTMLElement> = new Array<HTMLElement>;

    constructor(... pages: Array<HTMLElement>){
        this.pages = pages;
    }

    navigate(idName: string): void {
        let nodeToShow: number | null = null;

        for (let i = 0; i < this.pages.length; i++) {
            if (nodeToShow){
                this.hideHTMLElement(this.pages[i]);
            }
            else if (this.pages[i].id == idName){
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

    private hideHTMLElement(element: HTMLElement): void {
        if (element.classList[element.classList.length - 1] != "hidden"){
            element.classList.add("hidden");
        }
    }

    private showHTMLElement(element: HTMLElement): void {
        if (element.classList[element.classList.length - 1] == "hidden"){
            element.classList.remove("hidden");
        }
    }
}