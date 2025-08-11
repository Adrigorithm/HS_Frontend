<nav>
    <ul class="flex flex-col bg-blue dark:bg-red text-center h-full">
        <li>
            <a href="/" class="<?php if($title == 'Home') {echo 'border-r-3 border-solid border-red';} ?> p-1 hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black flex fill-black dark:fill-white hover:fill-white dark:hover:fill-black">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24px"
                        viewBox="0 -960 960 960"
                        width="24px"
                        class="fill-inherit"
                >
                    <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" />
                </svg>
                <p class="hidden sm:block">Home</p>
            </a>
        </li>
        <li>
            <a class="<?php if($title == 'About') {echo 'border-r-3 border-solid border-red';} ?> p-1 hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black flex fill-black dark:fill-white hover:fill-white dark:hover:fill-black" href="/about">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-inherit"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                <p class="hidden sm:block">About</p>
            </a>
        </li>
        <li>
            <a class="<?php if($title == 'Projects') {echo 'border-r-3 border-solid border-red';} ?> p-1 hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black flex fill-black dark:fill-white hover:fill-white dark:hover:fill-black" href="/projects">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-inherit"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm80-80h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm200-190q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg>
                <p class="hidden sm:block">Projects</p>
            </a>
        </li>
        <li>
            <a class="<?php if($title == 'Contact') {echo 'border-r-3 border-solid border-red';} ?> p-1 hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black flex fill-black dark:fill-white hover:fill-white dark:hover:fill-black" href="/contact">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-inherit"><path d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z"/></svg>
                <p class="hidden sm:block">Contact</p>
            </a>
        </li>
        <li>
            <a class="<?php if($title == 'Store') {echo 'border-r-3 border-solid border-red';} ?> p-1 hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black flex fill-black dark:fill-white hover:fill-white dark:hover:fill-black" href="/store">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-inherit"><path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/></svg>
                <p class="hidden sm:block">Store</p>
            </a>
        </li>
    </ul>
</nav>