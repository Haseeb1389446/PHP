<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 pt-5">
                <form class="mt-5 pt-3">
                    <h1 class="mb-3">RECORD INSERT</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">ENTER NAME</label>
                        <input required type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input required type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input required type="text" class="form-control" id="city">
                    </div>
                    <button type="submit" id="insert" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-5"><label for="#search">Search Record : </label><input type="text" id="search" class="form-control mb-4" placeholder="search here"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">CITY</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tdata">

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#insert").click(function () {
                showdata();
                let name = $("#name").val();
                let email = $("#email").val();
                let city = $("#city").val();

                $.ajax({
                    url: "data.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        city: city
                    },
                    success: function (data) {
                        alert("Inserted successfully");
                    }
                });
            });


            showdata();
            function showdata() {
                $.ajax({
                    url: "show.php",
                    type: "POST",
                    success: function (data) {
                        $("#tdata").html(data);
                    }
                })
            };

            $(document).on("click", "#deletebtn", function () {
                let stdid = $(this).attr("rowid");
                // alert(id)
                $.ajax({
                    url: "delete.php",
                    type: "POST",
                    data: {
                        id: stdid
                    },
                    success: function (data) {
                        showdata();
                        alert("Record deleted")
                    }
                })
            })

            $(document).on("keyup","#search",function(){
                let word = $("#search").val();

                $.ajax({
                    url: "search.php",
                    type: "POST",
                    data: {
                        sword :word
                    },
                    success: function(data){
                    $("#tdata").html(data);
                    }
                })
            })

        });

    </script>
</body>

</html>