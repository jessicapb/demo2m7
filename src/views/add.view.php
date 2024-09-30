    <?php include 'partials/header.view.php'; ?>

    <main class="py-4">
        <div class="m-2 flex flex-col py-4 bg-gray-300">
            <h2 class="text-2xl underline">Add book</h2>
        <form class="m-2" action="add-boox" method="POST">
            <div class="px-4">
                <label class="px-2" for="title">Title</label>
                <input class="px-2 text-sm" type="text" placeholder="title">
            </div>
           <div class="px-4">
            <button class="bg-cyan-600 text-white mt-4 p-2" type="submit">Add</button>
           </div>
        </form>
        </div>
    </main>
<?php include 'partials/footer.view.php';?>