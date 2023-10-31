<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spelling Bee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="container">
        <nav class="row justify-content-between mt-2 text-center">
            <div class="col-6 score">Score: </div>
            <div class="col-3 correct" id="right">0</div>
            <div class="col-3 wrong" id="wrong">0</div>
        </nav>
        <div class="row justify-content-center">
            <h1 class="text-center word" id="words"></h1>
        </div>
        <div class="row justify-content-around buttons">
            <div class="col-6">
                <button type="button" class="rounded" onclick="plus()">&#x2705;</button>
            </div>
            <div class="col-6">
                <button type="button" class="rounded" onclick="minus()">&#x274C;</button>
            </div>
        </div>
        <div class="row justify-content-center skip">
            <div class="col-6">
                <button type="button" class="rounded" onclick="random()">Skip</button>
            </div>
        </div>
        <div class="row justify-content-center reset">
            <div class="col-6">
                <button type="button" class="rounded" onclick="reset()">Reset</button>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="index.js"></script>

</body>
</html>