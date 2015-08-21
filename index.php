<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URL search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <h2>Migration Search Box</h2>
            <div id="custom-search-input">
            <form action="match.php" method="post">
                <div class="input-group col-md-12">
                    <input type="text" class="search-query form-control" name="search" id="search" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
             <label><input type="checkbox" id="hide_numbers"> Hide numbers</label>
             <label><input type="checkbox" id="activate_links"> Activate links</label>
            </div>
        <div class="search_results col-md-6">
            <div class="col-xl-2" id="count">

            </div>

            <div class="col-xl-10" id="show_results">

                <ol id="list_results">

                </ol>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="results.js"></script>

</html>