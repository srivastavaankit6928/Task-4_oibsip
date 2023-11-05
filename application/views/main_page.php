<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url() ?>assets/CSS/main.css">
    <title>snapWrite | Home</title>
</head>

<body>
    <div class="container">
        <div class="container-up">
            <div class="up-holder">
                <h2>Add Task 📝</h2>
                <div class="row">
                    <input type="text" id="input-text" placeholder="Add Your Task" autocomplete="off">
                    <button class="click-btn">Add</button>
                </div>
            </div>
        </div>
        <div class="container-down">
            <div class="section left">
                <div class="holder">
                    <h2>Completed task ✅</h2>
                    <ul id="completed-List">

                    </ul>
                </div>
            </div>
            <div class="section-center">
                <h2>Your Tasks 🏃‍♂️</h2>
                <ul id="all-task">
                </ul>
            </div>
            <div class="section right">
                <div class="holder">
                    <h2>Pending task ⌚</h2>
                    <ul id="pending-List">
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal hidden">
            <div class="modal-header">
                <h2>Edit Item ✍️</h2>
                <button class="close-modal-btn">&times;</button>
            </div>

            <div class="edit-place">
                <input type="text" id="edit-text" autocomplete="off">
                <button class="save-btn">Save</button>
            </div>
        </div>
    </div>
    <div class="overlay hidden"></div>
    <script src="script.js"></script>
</body>

</html>