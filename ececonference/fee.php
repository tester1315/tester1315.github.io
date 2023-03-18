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


    /*REGISTERATION FEE TABLE FOR WIDE SCREENS*/

    echo '
    <div class="container">
        <br>
            <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Registration Fee</h5>
        <br>
        <table class="table table1">
            <thead>
               <h3><b> Indian Author</b></h3>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border font1">UG/PG Students </td>
                    <td class="border font1"> Rs. 500/-</td>
                    
                    
                    
                </tr>
                <tr class="border">
                    <td class="border">Research Scholars</td>
                    <td class="border">Rs. 750/-</td>
                    
                    
                    
                </tr>
                <tr class="border">
                    <td class="border">Faculty Authors</td>
                    <td class="border">Rs. 750/-</td>
                    
                    
                    
                </tr>
                <tr class="border">
                    <td class="border">Industry Delegates</td>
                    <td class="border">Rs. 1500/-</td>
                    
                    
                </tr>
                <tr class="border">
                    <td class="border"><b>Foreign Authors</b></td>
                    <td class="border">$30</td>
                    
                   
                    
                </tr>
                <tr class="border">
                
            </tbody>
        </table>
	    <div class="container">
            <p>
	    		Bank Details : 
Account Name: EC Department Training
Bank Name: Bank of Maharashtra
Branch Address : Adyar Branch, R K Towers, Adyar, Mangalore-575007
Account Number : 60312162440
IFSC Code: MAHB0001451
MICR Code : 575014003

	    	</p>
            </div> 

        ';


        /*REGISTERATION FEE TABLE FOR MOBILE SCREENS - INDIAN PARTICIPANTS*/

        echo '
        <table class="table table2">
            <thead>
               <h3><b> Indian Author</b></h3>
                
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border font10">UG/PG Students</td>
                    <td class="border font10">Rs. 500/-</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Research Scholars</td>
                    <td class="border font10">Rs. 750/-</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Faculty Authors</td>
                    <td class="border font10">Rs. 750/-</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Industry Delegates</td>
                    <td class="border font10">Rs. 1500/-</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10"><b>Foreign Authors</b></td>
                    <td class="border font10">$30</td>
                    
                </tr>
                
		    </tbody>
			
        </table>
        ';
        

        /*REGISTERATION FEE TABLE FOR MOBILE SCREENS - INTERNATIONAL PARTICIPANTS*/

        

    
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
