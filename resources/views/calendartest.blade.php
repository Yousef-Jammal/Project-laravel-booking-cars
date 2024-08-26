<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar with Disabled Dates</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* Modal background */
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            /* Black with opacity */
            backdrop-filter: blur(10px);
            /* Blur the background */
        }

        /* Modal content */
        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            /* Rounded corners */
            width: 80%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            /* Smooth shadow */
        }

        /* Blurred background image */
        .modal::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('your-background-image-url.jpg') no-repeat center center/cover;
            filter: blur(10px);
            z-index: -1;
        }

        h2 {
            color: #000;
            margin-bottom: 20px;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #000;
            border-radius: 10px;
            /* Rounded corners */
            box-sizing: border-box;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ffa633;
            color: #fff;
            border: none;
            border-radius: 10px;
            /* Rounded corners */
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            /* Smooth shadow */
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e6952a;
        }
    </style>
</head>

<body>
    <div class="modal">
        <div class="modal-content">
            <form action="#">
                <h2>Pick Up Date</h2>
                <input type="text" class="datepicker" name="rent_start">
                <h2>Drop Off Date</h2>
                <input type="text" class="datepicker" name="rent_end">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // Hardcoded dates to isolate the problem
        var disabledDates = [];
        document.addEventListener('DOMContentLoaded', async function() {
            const response = await fetch('http://127.0.0.1:8000/api/disabled_dates/2');
            const data = await response.json();
            disabledDates = data.dates_array;
        });

        function disableDates(date) {
            var formattedDate = $.datepicker.formatDate('yy-mm-dd', date);
            return [disabledDates.indexOf(formattedDate) === -1];
        }

        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                beforeShowDay: disableDates
            });
        });
    </script>
</body>

</html>