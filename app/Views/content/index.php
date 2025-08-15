<body class="bg-white dark:bg-black text-black dark:text-white flex flex-col min-h-dvh">
    <?= view('shared/header') ?>

    <main class="flex flex-row grow">
        <?= view('shared/navigation') ?>

        <section class="flex flex-col">
            <video class="min-w-full" autoplay controls loop>
                <source src="/assets/videos/intro.webm" type="video/webm" />
            </video>
        </section>
    </main>

    <?= view('shared/footer') ?>

    <script src="/assets/js/main.js"></script>
</body>
