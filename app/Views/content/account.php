<body class="bg-white dark:bg-black text-black dark:text-white flex flex-col min-h-dvh">
<script defer src="/assets/js/video.js"></script>

<?= view('shared/header') ?>

<main class="flex flex-row grow">
    <?= view('shared/navigation') ?>

    <section class="flex flex-col">
        <div class="flex flex-col justify-end items-center video-custom-controls">
            <video class="min-w-full" autoplay loop muted>
                <source src="/assets/videos/intro.webm" type="video/webm" />
            </video>
            <ul class="fixed flex bg-blue dark:bg-red opacity-75">
                <li>
                    <svg class="fill-red dark:fill-blue" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"><path d="M520-200v-560h240v560H520Zm-320 0v-560h240v560H200Zm400-80h80v-400h-80v400Zm-320 0h80v-400h-80v400Zm0-400v400-400Zm320 0v400-400Z"/></svg>
                </li>
                <li class="hidden">
                    <svg class="fill-red dark:fill-blue" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"><path d="M320-200v-560l440 280-440 280Zm80-280Zm0 134 210-134-210-134v268Z"/></svg>
                </li>
            </ul>
        </div>
        <div class="flex flex-col sm:flex-row">
            <h2 class="border-b-3 sm:border-b-0 sm:border-r-3 border-red dark:border-blue p-3 text-center text-xl font-bold">Intro</h2>
            <div class="flex flex-col p-3">
                <h3 class="text-center sm:text-left font-bold">Account page</h3>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>
        </div>
    </section>
</main>

<?= view('shared/footer') ?>
</body>
