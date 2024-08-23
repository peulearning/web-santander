const clockElement = document.getElementById('clock');
const calendarBody = document.getElementById('calendar-body');
const monthElement = document.getElementById('month');

const months = [
  'Janeiro',
  'Fevereiro',
  'Março',
  'Abril',
  'Maio',
  'Junho',
  'Julho',
  'Agosto',
  'Setembro',
  'Outubro',
  'Novembro',
  'Dezembro'
];

function updateClock() {
  const now = new Date();
  const hours = now.getHours();
  const minutes = now.getMinutes();
  const seconds = now.getSeconds();
  const day = now.getDate();
  const month = months[now.getMonth()];
  const year = now.getFullYear();

  const clockText = `${day} de ${month}, ${year}.`;
  clockElement.innerText = clockText;

  createCalendar(year, now.getMonth());
}

function getDaysInMonth(year, month) {
  return new Date(year, month + 1, 0).getDate();
}

function createCalendar(year, month) {
  const daysInMonth = getDaysInMonth(year, month);
  const firstDayOfMonth = new Date(year, month, 1).getDay();
  let day = 1;

  calendarBody.innerHTML = '';

  for (let i = 0; i < 6; i++) {
    const row = document.createElement('tr');

    for (let j = 0; j < 7; j++) {
      const cell = document.createElement('td');

      if (i === 0 && j < firstDayOfMonth) {
        cell.textContent = '';
      } else if (day <= daysInMonth) {
        cell.textContent = day;
        day++;

        if (day === new Date().getDate() && month === new Date().getMonth()) {
          cell.classList.add('today');
        }
      } else {
        cell.textContent = '';
      }

      row.appendChild(cell);
    }

    calendarBody.appendChild(row);
  }

  monthElement.innerText = months[month];
}

updateClock();
setInterval(updateClock, 60000);