function greeter(name: string) {
    return `Hello, ${name}!`;
}

let user = "Jane User";

document.body.textContent = greeter(user);