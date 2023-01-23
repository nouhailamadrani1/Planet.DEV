<?php include "head.php" ?>


<body class="">
    <div class="d-flex justify-content-between">
        <h2 style="color: rgb(27, 33, 54);">NM Blog | <span class="fs-5" style="color:rgb(245, 35, 98)">Add Article</span></h2>
        <span class="material-symbols-outlined m-2">
            favorite
        </span>
        </span>
    </div>
    <?php include 'sidebar.php'; ?>
    <?php include 'sidebarProfile.php'; ?>
    <form method="POST" action="" class="container white d-flex justify-content-center ">
        <div class="w-100">
            <h1 class="modal-title fs-5 " id="exampleModalLabel">Add Article</h1>
            <div class="d-flex  justify-content-end"><button class="add btn btn " style=" background:rgb(245, 35, 98)" onclick="addInput(event)">+ Add  Article</button></div>
            <div class="carte m-5 ">
                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <input type="text" name="title[]" class="form-control" placeholder="Enter  Your Title" >
                </div>
                <div class="input-group ">
                    <span class="input-group-text">Text</span>
                    <textarea class="form-control" name="text[]" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div>
                <button class="btn  btn" name="addArticle"  style=" background:rgb(245, 35, 98)">Submit</button>
            </div>
        </div>
    </form>
    <Script>

        const addBtn = document.querySelector(".add");
        const input = document.querySelector(".carte");
        function removeInput() {
            this.parentElement.remove();
        }

        function addInput(e) {
            e.preventDefault();
            
            const title = document.createElement("input");
            title.type = "text";
            title.name = "title[]";
            title.className = "form-control mb-3";
            title.placeholder = "Enter  Your Title";

            const text = document.createElement("textarea");
            text.type = "text";
            text.name = "text[]"
            text.placeholder = "Enter Your text";
            text.className = "form-control mb-3";

            const button = document.createElement("button");
            button.className = "btn btn-danger";
            button.innerText = "X";

            button.addEventListener("click", removeInput);

            const div = document.createElement("div");
            div.className = "carte m-5 ";

            input.appendChild(div);
            div.appendChild(title);
            div.appendChild(text);
            div.appendChild(button);

        }
    </Script>
    <?php include "footer.php" ?>