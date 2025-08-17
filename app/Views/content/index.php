<body class="bg-white dark:bg-black text-black dark:text-white flex flex-col min-h-dvh">
    <?= view('shared/header') ?>

    <main class="flex flex-row grow">
        <?= view('shared/navigation') ?>

        <section class="flex flex-col">
            <video class="min-w-full" autoplay controls loop>
                <source src="/assets/videos/intro.webm" type="video/webm" />
            </video>
            <div class="flex flex-col sm:flex-row">
                <h2 class="border-b-3 sm:border-b-0 sm:border-r-3 border-red dark:border-blue p-3 text-center text-xl font-bold">Intro</h2>
                <div class="flex flex-col p-3">
                    <h3 class="text-center sm:text-left font-bold">Dear visitor</h3>
                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
            </div>
        </section>
    </main>

    <?= view('shared/footer') ?>

    <script src="/assets/js/main.js"></script>
</body>
