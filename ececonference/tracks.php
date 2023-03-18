<!DOCTYPE html>
<html lang="en">

<?php
    /*HEAD*/
    include 'include/head.php';
?>


<body>
<?php
    /*HEADER*/
    include 'include/header.php';

    /*NAVIGATION BAR*/
    include 'include/navbar.php';

    echo '

    <!--TRACKS-->


    <div class="container shadow text-dark border rounded text-center">
        <h3 class="text-center text-black-70 font-weight-bold font7 p-2">TRACKS TO BE COVERED</h3>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 mx-1 size shadow pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 1:Artificial Intelligence 
                    </h5>
                <hr>
                <ul>
                    <li> IoT</li>
                    <li>Robotics and Automation</li>
                    <li>Machine Learning and Deep Learning</li>
                    <li>Cloud Computing for Industry 4.0</li>
                    <li>Big Data and Blockchain Technology</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 2: Applied Electronics</h5>
                <hr>
                <ul>
                    <li>Signal and Image Processing</li>
                    <li>5G Communication</li>
                    <li>Wireless Communication and Network</li>
                    <li>Advanced Embedded System </li>
                    <li>VLSI</li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 3:Technology in Management 
                    </h5>
                <hr>
                <ul>
                    <li>Sensor Technology</li>
                    <li>Power Management</li>
                    <li>Security Management</li>
                    
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 4: Electrical Engineering</h5>
                <hr>
                <ul>
                    <li>Electrical Machines </li>
                    <li>Industrial Drives</li>
                    <li>Renewable Energy</li>
                   
                </ul>
            </div>
        </div>
    </div>
    
    ';

    /*USEFULL LINKS*/
    include 'include/section.php';

     /*FOOTER*/
     include 'include/footer.php';
?>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
