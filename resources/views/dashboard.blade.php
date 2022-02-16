@extends('layout')
@section('style')
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
@endsection

    <title>dashboard</title>
{{--    <link rel="stylesheet" href="css/style.css" />--}}
{{--</head>--}}



<table style="width: 80%; margin: 124px">
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>EC</th>
        <th>Exam</th>
        <th>Grade</th>
        <th>EC got (NBSA boundary= 45EC )</th>
    </tr>
    @foreach($grades as $grade)
    <tr>
        <td>{{$grade->quartile}}</td>
        <td>{{$grade->course_name}}</td>
        <td>{{$grade->EC}}</td>
        <td>{{$grade->Exam}}</td>
        <td>{{$grade->beste_grade}}</td>
        <td>{{$grade->completed}}</td>
    </tr>
    @endforeach()
}
</table>

