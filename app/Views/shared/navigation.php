<nav>
    <ul class="flex flex-col sm:flex-row bg-blue dark:bg-red text-center">
        <li>
            <a href="#!">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24px"
                        viewBox="0 -960 960 960"
                        width="24px"
                        class="<?php if($title == 'Home') {echo 'border-r-3 sm:border-r-0 sm:border-r-3 border-solid border-red';} ?> fill-black dark:fill-white hover:bg-red hover:dark:bg-blue hover:fill-white dark:hover:fill-black w-full h-[2rem] p-1"
                >
                    <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" />
                </svg>
            </a>
        </li>
        <li>
            <a class="<?php if($title == 'About') {echo 'border-r-3 sm:border-r-0 sm:border-r-3 border-solid border-red';} ?> p-1 block w-full hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black" href="#!">About</a>
        </li>
        <li>
            <a class="<?php if($title == 'Projects') {echo 'border-r-3 sm:border-r-0 sm:border-r-3 border-solid border-red';} ?> p-1 block w-full hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black" href="#!">Projects</a>
        </li>
        <li>
            <a class="<?php if($title == 'Contact') {echo 'border-r-3 sm:border-r-0 sm:border-r-3 border-solid border-red';} ?> p-1 block w-full hover:bg-red hover:text-white hover:dark:bg-blue hover:dark:text-black" href="#!">Contact</a>
        </li>
    </ul>
</nav>