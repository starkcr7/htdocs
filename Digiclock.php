<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        #clock {
            font-size: 48px;
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div id="clock"><?php echo date("H:i:s"); ?></div>

    <script>
        function updateClock() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();
            
            // Add leading zeros if necessary
            hours = (hours < 10 ? "0" : "") + hours;
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;
            
            // Format the time
            var timeString = hours + ":" + minutes + ":" + seconds;
            
            // Update the clock
            document.getElementById("clock").innerText = timeString;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
