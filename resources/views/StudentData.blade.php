<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>

    <style>
        /* Reset default margin and padding */
        body, h1 {
            margin: 0;
            padding: 0;
        }

        /* Set up a basic layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            padding: 20px;
        }

        /* Center the table container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Table Header */
        th {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            text-align: left;
            font-size: 16px;
        }

        /* Table Row */
        td {
            padding: 12px;
            text-align: left;
            border-top: 1px solid #ddd;
            font-size: 14px;
        }

        /* Table Row hover effect */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Heading style */
        h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }
    </style>

</head>
<body>

    <div class="container">
        <h1>Student Information</h1>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roll</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through the $student data -->
                @foreach($student as $item)
                    <tr>
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->Email }}</td>
                        <td>{{ $item->Roll }}</td>
                        <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
