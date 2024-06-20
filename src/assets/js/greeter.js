"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
function greeter(name) {
    return `Hello, ${name}!`;
}
let user = "Jane User";
document.body.textContent = greeter(user);
