<?php include 'header.php';?>
<?php include 'db_conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            position: absolute;
            left: 120px;
            top: 185px;
            font-size: 30px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .login {
            position: absolute;
            right: 250px;
            top: 185px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .register {
            position: absolute;
            right: 133px;
            top: 185px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .top {
            width: 1100px;
            height: auto;
            padding: 5px;
            margin: auto;
            text-align: center;
        }

        .mission,
        .vision, .objective, .strategic {
            width: 250px;
            height: auto;
            padding: 3px;
            float: left;
            margin: 10px;
        }

        .about h5 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            padding: 20px;
            color: black ;
            letter-spacing: 2px;
            font-style: normal;
            font-weight: italic;
            background-image: linear-gradient(lightgreen, lightyellow);
            
        }

        .about h4 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            padding: 20px;
            letter-spacing: 2px;
            font-weight: 1500;
            font-style: normal;
        }

        .content h4 {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <main>
        <div class="title">
            <h3>About</h3>
        </div>

        <section class= "login">
        <form action="login.php" method="get">
        <input type="submit" class="btn btn-success" name="login_students" value="LOGIN">
            </form>
        </section>

        <section class="register">
        <form action="register.php" method="get">
        <input type="submit" class="btn btn-danger" name="register_students" value="REGISTER">
        <a href="register.php"></a>
    </form>
        </section>

    </main> 
    
    <div class="top">
    <img src="thumb.jpg" alt="University field" class="img-fluid">
    </div>

    <div class="content">
        <h4>Content</h4>

    <div class="about">
        <h5>
        A student listing is a structured collection of information about students enrolled in an educational institution. 
        This listing typically includes essential details about each student for administrative and communication purposes. 
        Here's a description of the fields you mentioned: </h5>
        
        <h5>1. School ID:
        A unique identifier assigned to each student within the educational institution.
        Used for tracking purposes, such as attendance, grading, and other administrative tasks.</h5>

        <h5>2. First Name:
        The given or first name of the student.
        Used for personal identification and communication.</h5>

        <h5>3. Middle Name:
        The middle name of the student, if applicable.
        Some individuals have a middle name that can be used for further identification.</h5>

        <h5>4. Last Name:
        The family or surname of the student.
        Used for formal identification and records.</h5>

        <h5>5. Gender:
        The biological or self-identified gender of the student.
        Important for demographic analysis and for addressing individuals appropriately.</h5>
        
        <h5>6. Message:
        A field that might be used for special notes, messages, or comments related to the student.
        This could include important information about the student's academic performance, behavior, or any other relevant details.</h5>

        <h5>
            A student listing is a valuable resource for educational institutions to manage student data efficiently. It aids in various administrative tasks, such as creating class rosters, generating reports, and facilitating communication between educators, students, and parents. Additionally, the inclusion of a message field allows for personalized notes or alerts that may be important for the student's academic journey. 
The overall goal is to have a well-organized and accessible record of each student's information within the educational system.
        </h5>
    </div>

       
    </div>
    
    <div class="mission">
    <img src="mission.jpg" alt="University field" class="img-fluid">
    </div>

    <div class="vision">
    <img src="vision.jpg" alt="University field" class="img-fluid">
    </div>

    <div class="strategic">
    <img src="strategic-goals.jpg" alt="University field" class="img-fluid">
    </div>

    <div class="objective">
    <img src="objectives.jpg" alt="University field" class="img-fluid">
    </div>


</body>
</html>
