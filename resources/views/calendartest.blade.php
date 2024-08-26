<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar with Disabled Dates</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
    <h2>Select a Date</h2>
    <input type="text" id="datepicker" name="date">

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
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                beforeShowDay: disableDates
            });
        });
    </script>
</body>

</html>