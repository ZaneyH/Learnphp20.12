<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
   <h1>New Article</h1>
</div>
<form action="/admin/articles" method="POST" enctype="multipart/form-data">
    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" placeholder="Title" name="title" id="title">
        </div>
    </div>
    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea class="textarea" placeholder="Content..." name="body" id="body"></textarea>
        </div>
    </div>
    <div class="field">
        <label class="label">Vegan</label>
        <div class="control">
            <input type="checkbox" name="isvegan"> Vegan
        </div>
    </div>
    <div class="field">
        <label class="label">Spiciness</label>
        <div class="control">
            <select class="select" name="spiciness">
                <option value="mild">Mild</option>
                <option value="medium">Medium</option>
                <option value="spicy">Spicy</option>
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">Picture</label>
        <div class="control">
            <input type="file" name="picture">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <input class="button is-primary" type="submit">
        </div>
    </div>
</form>

<?php include __DIR__ . '/../partials/footer.php'; ?>
