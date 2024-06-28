# On halt - Missing information from product owner

# A simple frontend website using
- HTML
- CSS (TailwindCSS)
- TypeScript
- JSON (for data)

## Todo
- [ ] PDF parsing?
- [ ] Some way to add new entries

## Contributing
Even though I likely will not allow contributions to this repo I will still provide my workflow. Keep in mind that minimal frameworks are used to allow for the most control and flexibility. There is no hot reload although this can be easiliy achieved.

### Workflow
- `VSCode` is recommended as scripts are included to run as tasks (if you don't want to use `VSC`, you'll need to execute the commands some other way).
- `Clone` the repository
- Install [pnpm](https://pnpm.io/installation)
- Run `pnpm install` to resolve dependencies
- Run a webserver from the `src/` directory (a task that needs python3 is included)
- Run the `tailwind` task to automatically build css from class names
- Run the `tsc` task to compile the TypeScript
- You'll need ot refresh everytime the proceding two events occur to see the changes (or implement hot reload)

