<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lab Assignment 9</title>
</head>

<body>
    <div class="container">
        <div class="ro">
            <div class="col">
                <p style="text-align: center;">
                <h2 style="text-align: center;">Lab Assignment</h2>
                </p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Odd or Even</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Checks if the number is odd or even</h6>
                        <p class="card-text">Enter an integer to check it and click the check button.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form action="" method="post">

                    <input class="form-control form-control-lg" type="text" name="n1">
                    <br>
                    <button type="submit" class="btn btn-primary">Check</button>
                    <?php
                    if (isset($_POST['n1'])) {

                        if ($_POST['n1'] != "") {
                            isEven($_POST['n1']);
                        } else {
                            echo "no data";
                        }
                    }

                    function isEven($n)
                    {
                        if ($n % 2 === 0) {
                            echo "the number is even";
                        } else {
                            echo "the number is odd";
                        }
                    }
                    ?>
                </form>
            </div>
            <div class="col-lg-4">





            </div>
        </div>

        <hr>


        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Prime or not</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Checks if the number is prime or not</h6>
                        <p class="card-text">Enter an integer to check it and click the check button.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form action="" method="post">

                    <input class="form-control form-control-lg" type="text" name="n2">
                    <br>
                    <button type="submit" class="btn btn-primary">Check</button>
                    <?php
                    if (isset($_POST['n2'])) {

                        if ($_POST['n2'] != "") {
                            isPrime($_POST['n2']);
                        } else {
                            echo "no data";
                        }
                    }

                    function isPrime($n) {
                        $prime = true;
                        for ($i = 2; $i < $n AND $prime === true; $i++) {
                            if ($n % $i === 0) {
                                $prime = false;
                            }
                            else {
                                $prime = true;
                            }
                        }

                        if ($prime) {
                            echo "the number is prime";
                        } else {
                            echo "the number isn't prime";
                        }
                    }
                    ?>
                </form>
            </div>
            <div class="col-lg-4">

            </div>
        </div>

        <hr>


        <div class="row">
            <div class="col-lg-4">


                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Factorial</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Produces the factorial (n!) of a number</h6>
                        <p class="card-text">Enter an integer and click the factorial button.</p>

                    </div>
                </div>



            </div>
            <div class="col-lg-4">

                <form action="" method="post">

                    <input class="form-control form-control-lg" type="text" name="n3">
                    <br>
                    <button type="submit" class="btn btn-primary">Factorial</button>
                    <?php
                    if (isset($_POST['n3'])) {

                        if ($_POST['n3'] != "") {
                            factorial($_POST['n3']);
                        } else {
                            echo "no data";
                        }
                    }

                    function factorial($n) {
                        $num = 1;
                        for ($i = 1; $i <= $n; $i++) {
                            $num *= $i;
                        }

                        echo $num;
                    }
                    ?>
                </form>

            </div>
            <div class="col-lg-4">












            </div>
        </div>
    </div>
</body>

</html>