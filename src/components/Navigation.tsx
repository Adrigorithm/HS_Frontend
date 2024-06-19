import { Component, Index } from "solid-js"

const Navigation: Component<NavigationProps> = props => {
    return (
        <nav>
            <ul>
                <Index each={props.pages}>
                    {(page) => <a href={`/ + ${page()}`}><li>{page()}</li></a>}
                </Index>
            </ul>
        </nav>  
    )
}

export default Navigation