import { Component, Index } from "solid-js"

const Navigation: Component<NavigationProps> = props => {
    return (
        <ul>
            <Index each={props.pages}>
                {(page) => <li>{page()}</li>}
            </Index>
        </ul>
    )
}

export default Navigation