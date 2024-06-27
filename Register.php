<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            background-color: orange;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
            background-color: #f8f8f8;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: grid;
            gap: 10px;
        }

        label {
            text-align: right;
            font-weight: bold;
            grid-column: 1;
            grid-row: auto;
        }

        input[type="text"],
        textarea,
        input[type="number"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            grid-column: 2;
            grid-row: auto;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            grid-column: span 2;
            grid-row: auto;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Student Registration</h1>
    <form action="Project.php" method="post">
        <label for="Fullname">Full Name:</label>
        <input type="text" id="Fullname" name="Fullname" placeholder="Enter your full name" required>

        <label for="Aadharnumber">Aadhar Number:</label>
        <input type="text" id="Aadharnumber" name="Aadharnumber" placeholder="Enter your Aadhar number" required>

        <label for="Phonenumber">Phone Number:</label>
        <input type="text" id="Phonenumber" name="Phonenumber" placeholder="Enter your phone number" required>

        <label for="StudentId">Student ID:</label>
        <input type="text" id="StudentId" name="StudentId" placeholder="Enter your student ID" required>

        <label for="Route">Route:</label>
        <select id="Route" name="Route" required>
            <option value="" selected>Choose the Route...</option>
            <option value="Guntur">Guntur</option>
            <option value="Pedakakani">Pedakakani</option>
            <option value="Kanteru 'X' Road">Kanteru 'X' Road</option>
            <option value="Kaza">Kaza</option>
            <option value="Chinna kakani">Chinna kakani</option>
            <option value="Mangalgiri">Mangalgiri</option>
            <option value="Kunchena Palli">Kunchena Palli</option>
            <option value="Vijaywada">Vijaywada</option>
            <option value="Tenali">Tenali</option>
            <option value="Duggirala">Duggirala</option>
            <option value="Nandivelugu">Nandivelugu</option>
            <option value="Tummapudi">Tummapudi</option>
            <option value="Revendrapadu">Revendrapadu</option>
            <option value="Peda vadlapudi">Peda vadlapudi</option>
            <option value="Takkellapadu">Takkellapadu</option>
            <option value="Nuthakki">Nuthakki</option>
            <option value="Kolakaluru">Kolakaluru</option>
            <option value="Halfpeta">Halfpeta</option>
            <option value="Venkata Krishna Puram">Venkata Krishna Puram</option>
            <option value="Uppalapadu">Uppalapadu</option>
            <option value="Nambur">Nambur</option>
            <option value="Ponnuru">Ponnuru</option>
            <option value="Chebrolu">Chebrolu</option>
            <option value="Narakoduru">Narakoduru</option>
            <option value="Budampadu">Budampadu</option>
            <option value="Amaravathi">Amaravathi</option>
            <option value="Tadikonda">Tadikonda</option>
            <option value="Kantheru">Kantheru</option>
            <option value="Perecharla">Perecharla</option>
            <option value="Pulladigunta">Pulladigunta</option>
            <option value="Etukuru">Etukuru</option>
            <option value="Nallapadu">Nallapadu</option>
            <option value="Chilakalurpeta">Chilakalurpeta</option>
            <option value="Chowdavaram">Chowdavaram</option>
            <option value="Yedlapadu">Yedlapadu</option>
            <option value="Lal Puram">Lal Puram</option>
            <option value="Life Hostel">Life Hostel</option>
            <option value="Pedanandipadu">Pedanandipadu</option>
            <option value="Kollipara">Kollipara</option>
            <option value="Prathipadu">Prathipadu</option>
        </select>

        <label for="Department">Department:</label>
        <select id="Department" name="Department" required>
            <option value="" selected>Choose your department...</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="CSM">CSM</option>
            <option value="CSO">CSO</option>
            <option value="CIC">CIC</option>
            <option value="AIDS">AIDS</option>
            <option value="AIML">AIML</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
        </select>

        <input type="submit" value="Register"  name="Register">
    </form>
</body>
</html>
