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
            position: relative;
        }

        /* Back button */
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ffa633;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #e6952a;
        }

        h2 {
            color: #000;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .modal-title {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            margin-bottom: 30px;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-container input[type="text"] {
            width: 100%;
            padding: 12px 40px 12px 12px;
            /* Adjusted padding for icon */
            border: 1px solid #000;
            border-radius: 10px;
            /* Rounded corners */
            box-sizing: border-box;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .input-container .icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #ffa633;
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

        /* Icons */
        .icon-calendar {
            content: '\1F4C5';
            /* Unicode for calendar icon */
        }
    </style>
</head>

<body>
    <div class="modal">
        <div class="modal-content">
            <a href="javascript:history.back()" class="back-button">Back</a>
            <div class="modal-title">Choose Dates</div>
            <form action="{{route('rental-session')}}" method="post">
                @csrf
                <div class="input-container">
                    <span class="icon icon-calendar"></span>
                    <input type="text" class="datepicker" name="rent_start" placeholder="Pick Up Date">
                </div>
                <div class="input-container">
                    <span class="icon icon-calendar"></span>
                    <input type="text" class="datepicker" name="rent_end" placeholder="Drop Off Date">
                    <input type="hidden" id="car_id" name="car_id" value="" />
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // Disable all <a> links from redirecting (for other purposes)
        $(document).on('click', '.ui-datepicker a', function(event) {
            event.preventDefault();
            event.stopPropagation();
        });

        // Fetch the current URL and extract the ID
        const url = window.location.href;
        const id = url.match(/show_calendar\/(\d+)/);

        // Hardcoded dates to isolate the problem
        var disabledDates = [];
        document.addEventListener('DOMContentLoaded', async function() {
            const response = await fetch('http://127.0.0.1:8000/api/disabled_dates/' + id[1]);
            const data = await response.json();
            disabledDates = data.dates_array;
            document.querySelector("#car_id").value = id[1];
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