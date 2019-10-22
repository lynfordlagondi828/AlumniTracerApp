<?php
    session_start();
    
    
   

    if(!isset($_SESSION["IsloggedIn"])){
        header('location:index.php');
        exit();
    }

    require_once 'inc/DbFunctions.php';
    $database = new DbFunctions();
    
    $username = $_SESSION["username"];
    $result = $database->user_information($username);
    
    $search_year ='';



    if(isset($_GET["submit"])){

      $search_year = trim($_GET["search_year"]);
        
      
      $_SESSION["search_year"] = $search_year;


       header('location:search.php');

       exit();

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alumni Tracer | NORSU-BSC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png" type="image/png"> 
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
    
    <link rel="stylesheet" href="DataTables/css/dataTables.bootstrap.min.css">  
    <style>
        table { 
            width: 100%; 
            border-collapse: collapse; 
            }
            /* Zebra striping */
            tr:nth-of-type(odd) { 
            background: #eee; 
            }
            th { 
            background: #333; 
            color: white; 
            font-weight: bold; 
            }
            td, th { 
            padding: 6px; 
            border: 1px solid #ccc; 
            text-align: left; 
            }
    </style>  
</head>
<body>
    <?php require_once 'header.php'; ?>
    
    <div align="center">
        <img src="img/logo.png" width="100" height="100">
        <h5>NORSU-BSC Alumni Tracer</h3>
        <p>
            Welcome 
            <?php foreach($result as $res): ?>
               <b> <?php echo htmlentities($res["fullname"]); ?></b>
            <?php endforeach ?>
            &nbsp;&nbsp;&nbsp;&nbsp;
           <b> <a href="logout.php" onclick="return confirm('logout?');">Log - out</a></b>
        </p>
    </div>
   

    <div style="margin-left:20px; margin-right:20px"> 
        <div id="tableManager" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-body">
                            <div id="editContent">
                            
                                    <label>Family Name</label>
                                    <input class="form-control"  type="text" id="familyname" placeholder="Family Name" required>
                                <br>

                                
                                    <label>First Name</label>
                                    <input class="form-control"  type="text" id="firstname" placeholder="First Name" required>
                                <br>

                                    <label>Middle Name</label>
                                    <input class="form-control"  type="text" id="middlename" placeholder="Middle Name" required>
                                <br>
                                
                                
                                    <label>Degree/Course</label>
                                    <input class="form-control"  type="text" id="degree" placeholder="Degree/Course" required>
                                <br>
                               
                                
                                    <label>Age</label>
                                    <input class="form-control"  type="number" id="age" placeholder="Age" required>
                               <br>

                               
                                    <label>Nationality</label>
                                    <input class="form-control"  type="text" id="nationality" placeholder="Nationality" required></td><br>
                                
                                  <label>Civil Status</label>
                                  <select class="form-control" id="status" required>
                                        <option name=""></option>
                                        <option name="Single">Single</option>
                                        <option name="married">Maried</option>
                                  </select>
                                <br>
                                <label>Year Graduated</label>
                                <?php
                                    // Sets the top option to be the current year. (IE. the option that is chosen by default).
                                    $currently_selected = date('Y'); 
                                    // Year to start available options at
                                    $earliest_year = 1950; 
                                    // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
                                    $latest_year = date('Y'); 

                                    print '<select class="form-control" id="year_graduated">';
                                    // Loops over each int[year] from current year, back to the $earliest_year [1950]
                                    foreach ( range( $latest_year, $earliest_year ) as $i ) {
                                        // Prints the option with the next year in range.
                                        print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                                    }
                                    print '</select>';
                                ?>
                                <br>

                                
                                    <label>Present Address</label>
                                    <input class="form-control"  type="text" id="present_address" placeholder="Present Address" required>
                                <br>
                                
                                
                                
                                    <label>Present Employment</label>
                                    <input class="form-control"  type="text" id="present_employment" placeholder="Present Employment" required>
                               <br>

                                <label>Employment Status</label>
                                <select class="form-control" id="employment_status">
                                        <option name=""></option>
                                        <option name="Employed">Employed</option>
                                        <option name="Un-Employed">Un-Employed</option>
                                        <option name="Un-Employed">Self-Employed</option>
                                </select>
                                <br>

                                
                                    <label>Office Address</label>
                                    <input class="form-control"  type="text" id="office_address" placeholder="Office Address(if any)" required>
                               <br>

                                
                                    <label>Contact Number</label>
                                    <input class="form-control"  type="text" id="contact_number" placeholder="Contact Number" required>
                              <br>

                               
                                    <label>Email Address</label>
                                    <input class="form-control"  type="text" id="email" placeholder="Email Address" required>
                                <br>

                             
                                    <label>Facebook Name</label>
                                    <input class="form-control"  type="text" id="facebook" placeholder="Facebook Name" required>
                                <br>

                                
                                    <label>Name of Classmate</label>
                                    <input class="form-control"  type="text" id="name_of_classmate" placeholder="Name of Classmate" required>
                                <br>

                            
                                    <label>Classmate Address</label>
                                    <input class="form-control"  type="text" id="classmate_address" placeholder="Address of Classmate" required>
                                   
                                    <input type="hidden" id="editRowID" value="0">
                            </div>

                            <div id="showContent" style="display:none;">
                                <label>Family Name</label>
                                    <p id="FamilyName">
                                    </p>
                                    <hr>

                                <label>First Name</label>
                                <p id="FirstName">
                                </p>
                                <hr>

                                <label>Middle Name</label>
                                <p id="MiddleName">
                                </p>
                                <hr>

                                <label>Degree</label>
                                <p id="Degree">
                                </p>
                                <hr>

                                <label>Age</label>
                                <p id="Age">
                                </p>
                                <hr>

                                <label>Nationality</label>
                                <p id="Nationality">
                                </p>
                                <hr>

                                <label>Status</label>
                                <p id="Status">
                                </p>
                                <hr>

                                <label>Year Graduated</label>
                                <p id="YearGraduated">
                                </p>
                                <hr>

                                <label>Present Address</label>
                                <p id="PresentAddress">
                                </p>
                                <hr>

                                <label>Present Employment</label>
                                <p id="PresentEmployment">
                                </p>
                                <hr>

                                <label>Employment Status</label>
                                <p id="EmploymentStatus">
                                </p>
                                <hr>

                                <label>Office Address</label>
                                <p id="OfficeAddress">
                                </p>
                                <hr>

                                <label>Contact Number</label>
                                <p id="ContactNumber">
                                </p>
                                <hr>

                                <label>Email</label>
                                <p id="Email">
                                </p>
                                <hr>

                                <label>Facebook</label>
                                <p id="Facebook">
                                </p>
                                <hr>
                                
                                <label>Name of Classmate</label>
                                <p id="NameOfClassmate">
                                </p>
                                <hr>

                                <label>Classmate Address</label>
                                <p id="ClassmateAddress">
                                </p>
                                <hr>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn" style="display: none;">
                            <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-50 col-md-offset-0">
                        
            
                
                <input type="button" class="btn btn-success" id="addNew" value="Add New">
                <a class="btn btn-warning" href="export_excel.php">Download Excel <i class="glyphicon glyphicon-download-alt"></i></a>
                <a class="btn btn-danger" href="export_csv.php">Download CSV <i class="glyphicon glyphicon-download-alt"></i></a>

                
                <h4>List of NORSU-BSC Alumni</h4>
                <form method="get">
                    <label>Search Year Graduated</label>
                    <?php
                        // Sets the top option to be the current year. (IE. the option that is chosen by default).
                        $currently_selected = date('Y'); 
                        // Year to start available options at
                        $earliest_year = 1950; 
                        // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
                        $latest_year = date('Y'); 

                        print '<select name="search_year">';
                        // Loops over each int[year] from current year, back to the $earliest_year [1950]
                        foreach ( range( $latest_year, $earliest_year ) as $i ) {
                            // Prints the option with the next year in range.
                            print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                        }
                        print '</select>';
                    ?>
        
                    <button class="btn btn-default" name="submit">Go</button>
        
                </form>
                    <table id="table" class="table table-responsive table-bordered">
                        <thead>    
                            <tr>
                                <th>Family Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Degree</th>
                                <th>Age</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th>Year Graduated</th>
                                <th>Present Address</th>
                                <th>Present Employment</th>
                                <th>Employment Status</th>
                                <th>Office Addres</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>View</th>
                            </tr>
                        <thead>    
                        <tbody>
                        </tbody>
                    </table>
                
            </div>
        </div>
     </div>

    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="DataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="DataTables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!--JavaScript-->
    <script type="text/javascript">

        $(document).ready(function(){
            $("#addNew").on('click', function(){
                $("#tableManager").modal('show');
                $("#closeBtn").fadeIn();
            });

            $("#tableManager").on('hidden.bs.modal', function () {
                $("#editContent").fadeIn();
                $("#editRowID").val(0);
                $("#showContent").fadeOut();

                $("#familyname").val("");
                $("#firstname").val("");
                $("#middlename").val("");
                $("#degree").val("");
                $("#age").val("");
                $("#nationality").val("");
                $("#status").val("");
                $("#year_graduated").val("");
                $("#present_address").val("");
                $("#present_employment").val("");
                $("#employment_status").val("");
                $("#office_address").val("");
                $("#contact_number").val("");
                $("#email").val("");
                $("#facebook").val("");
                $("#name_of_classmate").val("");
                $("#classmate_address").val("");   


                $("#closeBtn").fadeOut();
                $("#manageBtn").attr('value', 'Save').attr('onclick', "manageData('addNew')").fadeIn();
            });

		    fetchAlumni(0,10);
        });

        //fetch travel order list
    function fetchAlumni(start,limit){

        $.ajax({
            url:'ajax.php',
            method:'POST',
            dataType:'text',
            data:{
                key:'list_of_alumni',
                start:start,
                limit:limit
            },success:function(response){

                if(response != "reachedMax"){

                    $('tbody').append(response);

                    start += limit;
                    fetchAlumni(start,limit);
                } else {

                    $(".table").DataTable();
                }
            }
        });
    }

    function manageData(key){

            
        var familyname = $("#familyname");
        var firstname = $("#firstname");
        var middlename = $("#middlename");
        var degree = $("#degree");
        var age = $("#age");
        var nationality = $("#nationality");
        var status = $("#status");
        var year_graduated = $("#year_graduated");
        var present_address = $("#present_address");
        var present_employment = $("#present_employment");
        var employment_status = $("#employment_status");
        var office_address = $("#office_address");
        var contact_number = $("#contact_number");
        var email = $("#email");
        var facebook = $("#facebook");
        var name_of_classmate = $("#name_of_classmate");
        var classmate_address = $("#classmate_address");
        var editRowID = $("#editRowID");

        if(isNotEmpty(familyname) && isNotEmpty(firstname) && isNotEmpty(middlename) && isNotEmpty(degree) && isNotEmpty(age)
            && isNotEmpty(nationality) && isNotEmpty(status) && isNotEmpty(year_graduated) && isNotEmpty(present_address)
            && isNotEmpty(present_employment) && isNotEmpty(employment_status) && isNotEmpty(office_address) && isNotEmpty(contact_number)
            && isNotEmpty(email) && isNotEmpty(name_of_classmate) && isNotEmpty(classmate_address)){


            $.ajax({
                url:'ajax.php',
                method:'POST',
                dataType:'text',
                data:{
                    key:key,
                    familyname:familyname.val(),
                    firstname:firstname.val(),
                    middlename:middlename.val(),
                    degree: degree.val(),
                    age:age.val(),
                    nationality:nationality.val(),
                    status:status.val(),
                    year_graduated:year_graduated.val(),
                    present_address:present_address.val(),
                    present_employment:present_employment.val(),
                    employment_status:employment_status.val(),
                    office_address:office_address.val(),
                    contact_number:contact_number.val(),
                    email:email.val(),
                    facebook:facebook.val(),
                    name_of_classmate:name_of_classmate.val(),
                    classmate_address:classmate_address.val(),
                    rowID: editRowID.val()


                },success:function(response){

                    if(response){
                        alert(response);
                        $("#tableManager").modal('hide');
                        window.location="dashboard.php";
                        
                    }
                    
                    else {
                       
                        $("#familyname"+editRowID.val()).html(familyname.val());

                        $("#tableManager").modal('hide');
                        $("#manageBtn").attr('value', 'Save').attr('onclick', "manageData('addNew')");
                    }
                }
            });
        }
    }

    //Edit 
    function ViewOreditRow(rowID, type){

        $.ajax({
            url:'ajax.php',
            method:'POST',
            dataType:'json',
            data:{
                key:'get_single_row',
                rowID:rowID
            },success:function(response){

                if (type == "view") {

                    $("#editContent").fadeOut();
                    $("#manageBtn").fadeOut();
                    $("#closeBtn").fadeIn();
                    
                    $("#showContent").fadeIn();

                    $("#FamilyName").html(response.familyname);
                    $("#FirstName").html(response.firstname);
                    $("#MiddleName").html(response.middlename);
                    $("#Degree").html(response.degree);
                    $("#Age").html(response.age);
                    $("#National").html(response.nationality);
                    $("#Status").html(response.status);
                    $("#YearGraduated").html(response.year_graduated);
                    $("#PresentAddress").html(response.present_address);
                    $("#PresentEmployment").html(response.present_employment);
                    $("#EmploymentStatus").html(response.employment_status);
                    $("#OfficeAddress").html(response.office_address);
                    $("#ContactNumber").html(response.contact_number);
                    $("#Email").html(response.email);
                    $("#Facebook").html(response.facebook);
                    $("#NameOfClassmate").html(response.name_of_classmate);
                    $("#ClassmateAddress").html(response.classmate_address);


                } else {

                    $("#editContent").fadeIn();
                    $("#showContent").fadeOut();
                    $("#closeBtn").fadeIn();
                    $("#manageBtn").fadeIn();

                    $("#editRowID").val(rowID);

                    $("#familyname").val(response.familyname);
                    $("#firstname").val(response.firstname);
                    $("#middlename").val(response.middlename);
                    $("#degree").val(response.degree);
                    $("#age").val(response.age);
                    $("#nationality").val(response.nationality);
                    $("#status").val(response.status);
                    $("#year_graduated").val(response.year_graduated);
                    $("#present_address").val(response.present_address);
                    $("#present_employment").val(response.present_employment);
                    $("#employment_status").val(response.employment_status);
                    $("#office_address").val(response.office_address);
                    $("#contact_number").val(response.contact_number);
                    $("#email").val(response.email);
                    $("#facebook").val(response.facebook);
                    $("#name_of_classmate").val(response.name_of_classmate);
                    $("#classmate_address").val(response.classmate_address);
                
                    $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
                }

                $(".modal-title").html(response.travel_order_number);
                $("#tableManager").modal('show');
            }
        });
    }
        //Delete Alumni
    function deleteRow(rowID){

        if(confirm("Are you sure?")){

            $.ajax({
                
                url:'ajax.php',
                method:'POST',
                dataType:'text',
                data:{
                    key:'delete',
                    rowID:rowID
                },success:function(response){
                    $("#familyname"+rowID).parent().remove();
                    alert(response);
                    window.location='dashboard.php';
                }
            });
        }
    }
    //caller
    function isNotEmpty(caller){

        if(caller.val() =='') {
        
        caller.css('border','1px solid red');
        return false;
        
        } else 
        caller.css('border','');
        return true;
    }

    </script>
    
<?php
    require_once 'footer.php';
?>
</body>
</html>