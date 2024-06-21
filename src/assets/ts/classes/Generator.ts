class Generator {
    /**
     * Set (or append) the text content of a certain html node.
     * @param node The node to change the text content for
     * @param text The text content :^)
     * @param [mode="APPEND"] SET will remove all children of `node` while APPEND will add it to the end, keeping already present (text)nodes.
    */
    static setText(node: HTMLElement, text: string, mode: "SET" | "APPEND" = "APPEND"): void {
        let textContent = document.createTextNode(text);

        if (mode == "SET")
            textContent.childNodes.forEach(node => node.remove());

        node.appendChild(textContent);
    }
}