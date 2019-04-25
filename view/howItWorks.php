<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3>How it works?</h3>
                <hr>
                <p>In folder <code>assets/images</code> create folders, name them the way you want your categories to be named (remember to use underscores instead of spaces, they'll be changed by script) and it's done.</p>
                <h3>Customization</h3>
                <hr>
                <h6>Changing path to the images</h6>
                <p>You can change the path to your images in <code>$rootDirectory</code> in <code>Gallery.php</code>.</p>
                <h6>Custom order of categories</h6>
                <p>If you don't want your categories in gallery to be sorted alphabetically, change <code>$customCategoriesOrder=false </code> to <code>true</code> in <code>Gallery.php</code>. After that you have to rename your folders and put the 2 oridinal numbers as prefixes, e.g. <code>01my_category</code>, because script will cut 2 first characters to make the category name from a folder name.</p>
                <h6>Disable sidebar</h6>
                <p>If you don't want to have sidebar, but you want to have categories change <code>$disableSidebar=false </code> to <code>true</code> in <code>Gallery.php</code></p>
                <h6>No categories</h6>
                <p>If you don't want to have categories simply create only one folder in <code>assets/images</code> and put all your photos there. Sidebar will be disabled automtically.
            </div>
        </div>
    </div>
</div>