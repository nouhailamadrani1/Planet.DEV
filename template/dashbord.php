
<?php  include 'head.php';?>
    
<body class="m-2">
    <div class="d-flex justify-content-between">
        <h2>NM Blog  | <span class="fs-5">Home</span></h2>


        <span class="material-symbols-outlined m-2">
            calendar_month
        </span>
    </div>
   
<?php  include 'sidebar.php';?>
    
<?php  include 'sidebarProfile.php';?>
       
    <div class=" d-flex justify-content-center">
        <div class="input-group mb-3 w-75 ">
            <input type="text" class="form-control" placeholder="search" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><span class="material-symbols-outlined">
                    search
                </span></span>
        </div>
    </div>
    <div class=" d-flex justify-content-center">

        <h5> Add article</h5>
    </div>

        <div  class=" d-flex justify-content-center  ">
        <button type="button" class="btn btn-close-white btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal"><br>

            <span class="material-symbols-outlined text-success">
              add_circle
                </span>
        </button>

    </div>
    <div class=" d-flex justify-content-center flex-wrap p-3">
        <div class="card m-2 shadow bg-body  " style="width: 15rem;">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    article
                    </span>
                <p class="card-title ">Number Of Articles</p>
                <p>212</p>
            </div>
        </div>
        <div class="card m-2  shadow bg-body " style="width: 15rem;">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    person
                    </span>
                <p class="card-title">Number Of Users</p>
                <p>34</p>
            </div>
        </div>
        <div class="card m-2  shadow bg-body " style="width: 15rem;">
            <div class="card-body">
                <span class="material-symbols-outlined">
                    history_edu
                    </span>
                <p class="card-title">Number Of Writers</p>
                <p>5</p>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center flex-wrap p-3">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true" style="width: 280px;
        height: 400px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="../img/profile.jpg" class="d-block w-100" alt="...">
                        <h5>Title : how are you ?</h5>
                        <p> I'm good</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/profile.jpg" class="d-block w-100" alt="...">
                        <h5>Title : how are you ?</h5>
                        <p> I'm good</p>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/profile.jpg" class="d-block w-100" alt="...">
                        <h5>Title : how are you ?</h5>
                        <p> I'm good</p>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="wrapper">
            <header>
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                <ul class="days"></ul>
            </div>
        </div>

    </div>
    <div></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="title">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="file" class="form-control">
                    <label for="">Text</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">Add Anther</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="title">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="file" class="form-control">
                    <label for="">Text</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>


                </div>
            </div>
        </div>
    </div>
   <?php include 'footer.php';?>