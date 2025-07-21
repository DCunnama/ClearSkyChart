const lat = 32.4;
const lon = 18.5;
const url = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}` +
            `&current_weather=true&hourly=temperature_2m`;

fetch(url)
  .then(res => {
    if (!res.ok) throw new Error('Request failed with status ' + res.status);
    return res.json();
  })
  .then(data => console.log(data))
  .catch(err => console.error(err));
