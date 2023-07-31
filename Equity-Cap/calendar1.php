<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Calendar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  .calendar {
    font-family: Arial, sans-serif;
  }

  .calendar .header {
    background-color: #f2f2f2;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }

  .calendar .header h2 {
    margin: 0;
    color: #333;
  }

  .calendar .weekdays {
    display: flex;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .calendar .weekday {
    flex: 1;
    text-align: center;
    color: #666;
  }

  .calendar .days {
    display: flex;
    flex-wrap: wrap;
  }

  .calendar .day {
    flex: 1;
    text-align: center;
    margin: 5px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    cursor: pointer;
  }

  .calendar .day:hover {
    background-color: #f5f5f5;
  }

  .calendar .day.active {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
  }
  </style>
</head>

<body>
  <div class="calendar-container"></div>

  <script>
  const months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];

  const weekdays = [
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'
  ];

  // Get current date
  const currentDate = new Date();

  // Build calendar header
  const calendar = document.createElement('div');
  calendar.classList.add('calendar');

  const header = document.createElement('div');
  header.classList.add('header');

  const prevButton = document.createElement('button');
  prevButton.innerText = '<';
  prevButton.addEventListener('click', () => {
    updateCalendar(-1);
  });

  const nextButton = document.createElement('button');
  nextButton.innerText = '>';
  nextButton.addEventListener('click', () => {
    updateCalendar(1);
  });

  const monthYear = document.createElement('h2');
  monthYear.innerText = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

  header.appendChild(prevButton);
  header.appendChild(monthYear);
  header.appendChild(nextButton);
  calendar.appendChild(header);

  // Build weekdays
  const weekdaysContainer = document.createElement('div');
  weekdaysContainer.classList.add('weekdays');

  weekdays.forEach((weekday) => {
    const div = document.createElement('div');
    div.classList.add('weekday');
    div.innerText = weekday.slice(0, 3);
    weekdaysContainer.appendChild(div);
  });

  calendar.appendChild(weekdaysContainer);

  // Build days
  const daysContainer = document.createElement('div');
  daysContainer.classList.add('days');

  function updateCalendar(monthsToMove) {
    currentDate.setMonth(currentDate.getMonth() + monthsToMove);

    monthYear.innerText = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

    while (daysContainer.firstChild) {
      daysContainer.removeChild(daysContainer.firstChild);
    }

    const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

    for (let i = 1 - firstDayOfMonth.getDay(); i <= lastDayOfMonth.getDate(); i++) {
      const day = document.createElement('div');
      day.classList.add('day');

      if (i > 0) {
        day.innerText = i;
        day.addEventListener('click', () => {
          const activeDay = document.querySelector('.day.active');
          if (activeDay) {
            activeDay.classList.remove('active');
          }
          day.classList.add('active');
        });
      }

      daysContainer.appendChild(day);
    }
  }

  updateCalendar(0);

  calendar.appendChild(daysContainer);

  // Add calendar to page
  document.querySelector('.calendar-container').appendChild(calendar);
  </script>
</body>

</html>