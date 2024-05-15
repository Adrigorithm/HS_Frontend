window.addEventListener("load", loaded);

function loaded(this: Window, ev: Event): void {
    loadBooks("/data/books.json");
}

async function loadBooks(dateFilePath: string): Promise<void> {
    fetch(dateFilePath)
        .then((response) => {
            return response.json();
        })
        .then((data: Array<Book>) => {
            let booksHTML: Array<HTMLElement> = Array<HTMLElement>();

            data.forEach(book => booksHTML.push(book.generateCard()));
            
            return booksHTML;
        });
}

/**
 * Insert `node` before or after another node.
 * @param node node before or after which `newNodes` should be inserted
 * @param mode operation relative to `node`
 * @param newNodes node(s) to insert
 */
function insertNodes(node: HTMLElement, mode: "Before" | "After", ...newNodes: Array<HTMLElement>): void {
    if (mode == "After")
        insertNodesAfter(node, ...newNodes);
    else
        insertNodesBefore(node, ...newNodes);
}

function insertNodesBefore(node: HTMLElement, ...newNodes: Array<HTMLElement>) {
    newNodes.forEach(currentNode => {
        node.before(currentNode);
    });
}

function insertNodesAfter(node: HTMLElement, ...newNodes: Array<HTMLElement>) {    
    let lastNode: HTMLElement | null = null;
    
    for (let index = 0; index < newNodes.length; index++) {
        if (lastNode == null)
            node.after(newNodes[index]);
        else {
            lastNode.after(newNodes[index]);
        }

        lastNode = newNodes[index];
    }
}
  