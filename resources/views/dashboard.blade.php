<!DOCTYPE html>
<html lang="nl">

<head>
    <style>
        /* background color */
        body {
            background-image: linear-gradient(90deg, darkblue, darkred);
        }

        th:hover {
            transform: scale(1.2);
        }

        td:hover {
            transform: scale(1.2);
        }

        /* table colors */
        table,
        th,
        td {
            border: 2px solid black;
            background-color: skyblue;
        }
    </style>

    <title>dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<!--navigatiebar  -->
<nav class="navbar">
    <a href="/">Home</a>
    <a href="profile">Profile</a>
    <a href="dashboard">Dashboard</a>
    <a href="faq">FAQ</a>
    <a href="blog">Blog</a>
</nav>

<table style="width: 80%; margin: 124px">
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>EC</th>
        <th>Exam</th>
        <th>Grade</th>
        <th>EC got (NBSA boundary= 45EC )</th>
    </tr>
    <tr>
        <td rowspan="3">1</td>
        <td>Programme and Career Orientation</td>
        <td>2,5 EC</td>
        <td>assesment</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>computer Science Basics</td>
        <td>5 EC</td>
        <td>Writing exam</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>programming Basics</td>
        <td>5EC</td>

        <td>Case study exam</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented programming</td>
        <td rowspan="2">10 EC</td>
        <td>case Study</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>project</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="4">3</td>
        <td>Framework development</td>
        <td>5EC</td>
        <td>Case Study</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7,5EC</td>
        <td>project</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>assesment</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Report</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="2">4</td>
        <td rowspan="2">framework Project 2</td>
        <td rowspan="2">10 EC</td>
        <td>project</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>assesment</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="3">The entire year</td>
        <td>portflio</td>
        <td>12,5 EC</td>
        <td>portfolio</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>personality 2</td>
        <td>2,5 EC</td>
        <td>attend</td>
        <td></td>

        <td></td>
    </tr>
    <tr>
        <td>personality 1</td>
        <td>2,5 EC</td>
        <td>attend</td>
        <td></td>

        <td rowspan="2"></td>
    </tr>
    <tr></tr>
</table>
<!-- footer -->

<div class="footer">
    <h2>Made By Niek Schlooz</h2>
</div>
</body>

</html>
